<?php

/**
*
* @package quicklanguage
* @copyright (c) 2014 Alg
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace alg\quicklanguage\event;

/**
 * @ignore
 */

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{

	const OK= 0;
	const QUICK_LANG_NO = 1;
	const QUICK_LANG_EN_DISABLE = 2;
	const API_YANDEX = 1;
	const API_BING = 2;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\request\request_interface */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var string phpBB root path */
	protected $root_path;

	/** @var string PHP extension */
	protected $php_ext;

	protected $allow_guests;
	protected $is_english_show;
	protected $error;

	public function __construct(\phpbb\config\config $config, \phpbb\db\driver\driver_interface $db, \phpbb\request\request_interface $request, \phpbb\template\template $template, \phpbb\user $user, $root_path, $php_ext)
	{
		$this->config = $config;
		$this->db = $db;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
		$this->root_path = $root_path;
		$this->php_ext = $php_ext;

		//Setup the common settings
		$this->allow_guests = isset($config['quicklanguage_allow_guests']) ? (bool) $config['quicklanguage_allow_guests'] : true;
		$this->is_english_show = isset($config['quicklanguage_is_english_show']) ? (bool) $config['quicklanguage_is_english_show'] : true;
		$this->error = listener::OK;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'			=> 'user_setup',
			'core.page_header_after'=> 'page_header_after',
			'core.display_forums_modify_template_vars'		=> 'display_forums_modify_template_vars',
			'core.display_forums_modify_category_template_vars'		=> 'display_forums_modify_category_template_vars',
			'core.viewforum_get_topic_data'=> 'viewforum_get_topic_data',
			'core.generate_forum_nav'=> 'generate_forum_nav',
		);
	}

	public function user_setup($event)
	{
		$this->quick_language_enable = false;

		//get all installed languages
		$sql = "SELECT * FROM " . LANG_TABLE;
		$result = $this->db->sql_query($sql);
		$counter = 0;
		$this->lang_info = array();
		while ($row = $this->db->sql_fetchrow($result))
		{
				$this->lang_info[] = $row;
				if (!($row['lang_iso'] == 'en' && !$this->is_english_show))
				{
					$counter++;
				}
		}
		$this->db->sql_freeresult($result);

		if ($counter < 2 || $event['user_data']['is_bot'] || ( $event['user_data']['user_id'] == ANONYMOUS && !$this->allow_guests))
		{
			//do nothing
			$this->quick_language_enable = false;
				$this->current_lang = $event['user_data']['is_registered'] ?  $event['user_lang_name'] :  $this->config['default_lang'];
			return;
		}
		$this->quick_language_enable = true;
		$this->current_lang = $event['user_data']['is_registered'] ?  $event['user_lang_name'] :  $this->request_cookie('quicklang', $this->config['default_lang'] );
		$submit = (isset($_POST['h_lang'])) ? true : false;
		if (!$submit)
		{
			if ($event['user_data']['is_registered'])
			{
				return;
			}
			else	 //user is guest
			{
				if ($this->current_lang != $this->config['default_lang'])
				{
					$event['user_lang_name'] = $this->current_lang;
				}
				return;
			}

		}
		$new_lang = basename($this->request->variable('h_lang', $this->current_lang ));
		//validate user data
		$res = $this->get_iso($new_lang);
		$this->new_lang = $new_lang;
		if ($res == '')
		{
			$this->error = listener::QUICK_LANG_NO;
			return;
		}
		if ($res == 'en' && !$this->is_english_show)
		{
			$this->error = listener::QUICK_LANG_EN_DISABLE;
			return;
		}

		//registered user
		if ( $event['user_data']['is_registered'])
		{
			if ($new_lang != $event['user_data']['user_lang'])
			{
				//change user lang preference
				$sql = "UPDATE "  . USERS_TABLE . " SET user_lang = '" . $new_lang . "' WHERE user_id=" . (int) $event['user_data']['user_id'];
				$this->db->sql_query($sql);
				$event['user_lang_name'] = $new_lang;
				$this->current_lang = $new_lang;
				return;
			}
		}
		// guest (not bot)
		if ( $event['user_data']['user_id'] == ANONYMOUS)
		{
			if ($new_lang != $this->current_lang)
			{
				//change guest lang preference
				$this->user->set_cookie('quicklang', $new_lang, 0);
				$event['user_lang_name'] = $new_lang;
				$this->current_lang = $new_lang;
			}
		}
	}

	public function page_header_after($event)
	{
		//if (!$this->quick_language_enable)
		//{
		//	 return;
		//}
		$this->user->add_lang_ext('alg/quicklanguage', 'quicklanguage');
		$url_back = build_url();
		$url_translate = '';
		$url_translate_getlang = '';
		$current_lang_name = '';
		if (isset($this->config['quicklanguage_is_link_translate_show']) && $this->config['quicklanguage_is_link_translate_show'] >0 && isset($this->config['quicklanguage_translate_api_key']) && $this->config['quicklanguage_translate_api_key'] != '' && isset($this->config['quicklanguage_translate_api_type']))
		{
			if ($this->config['quicklanguage_translate_api_type'] ==listener::API_YANDEX)
			{
				$url_translate = 'https://translate.yandex.net/api/v1.5/tr.json/translate';
				$url_translate_getlang = 'https://translate.yandex.net/api/v1.5/tr.json/getLangs?&ui=en';
			}
		}

		foreach ($this->lang_info as $row)
		{
			if (!($row['lang_iso'] == 'en' && !$this->is_english_show))
			{
				$this->template->assign_block_vars('langs', array (
				'LANG_ID'		=> $row['lang_id'],
				'LANG_ISO'		=> $row['lang_iso'],
				'LANG_LOCAL_NAME'		=> censor_text($row['lang_local_name']),
				'S_SELECTED_LANG'	=>	$this->current_lang == $row['lang_iso'],
				));
				if ($this->current_lang == $row['lang_iso'])
				{
					$current_lang_name = censor_text($row['lang_local_name']);
				}
			}
		}
		$this->template->assign_vars(array(
			'U_QUICK_LANG_ACTION'	=>  $url_back,
			'S_QUICK_LANGUAGE_ENABLE'	=> (bool) $this->quick_language_enable,
			'S_CURRENT_LANG'	=>	$this->current_lang,
			'S_CURRENT_LANG_NAME'	=>	$current_lang_name,
			'U_TRANSLATE_POST'	=>	$url_translate,
			'U_TRANSLATE_GETLANG'	=>	$url_translate_getlang,
			'S_YK'	=>	isset($this->config['quicklanguage_translate_api_key']) ? $this->config['quicklanguage_translate_api_key'] : '',
			'S_SHOW_TRANSLATE_POST'	=> (bool) $url_translate != '',
			));

		if ($this->config['sitename'] && isset($this->user->lang['SITENAME_NAME']))
		{
			$this->template->assign_vars(array('SITENAME'	=> $this->user->lang['SITENAME_NAME'],));
		}
		if ($this->config['site_desc'] && isset($this->user->lang['SITE_DESCRIPTION_NAME']))
		{
			$this->template->assign_vars(array('SITE_DESCRIPTION'	=> $this->user->lang['SITE_DESCRIPTION_NAME'],));
		}
		if ($this->config['site_home_url'] && isset($this->user->lang['SITE_HOME_NAME']))
		{
			$this->template->assign_vars(array('L_SITE_HOME'	=> $this->user->lang['SITE_HOME_NAME'],));
		}
		$index_path = append_sid("{$this->root_path}index.$this->php_ext");
		if ($index_path && isset($this->user->lang['INDEXPAGE_NAME']))
		{
			$this->template->assign_vars(array('L_INDEX'	=> $this->user->lang['INDEXPAGE_NAME'],));
		}
		$redirect = append_sid("{$this->root_path}" . $url_back, "");

		if ($this->error == listener::QUICK_LANG_NO)
		{
			meta_refresh (5, $url_back);
			trigger_error(sprintf($this->user->lang['QUICK_LANG_NO'], $this->new_lang) . '<br /><br /><a href="'. $redirect .  '">' .  $this->user->lang['BACK_TO_PREV'] . '</a>');
		}
		if ($this->error == listener::QUICK_LANG_EN_DISABLE)
		{
			meta_refresh (5, $url_back);
		}

	}

	public function display_forums_modify_template_vars($event)
	{
		$this->user->add_lang_ext('alg/quicklanguage', 'quicklanguage');
		$forum_row = $event['forum_row'];
		if (isset($this->user->lang['FORUM_NAME_' . $forum_row['FORUM_ID']]))
		{
			$forum_row['FORUM_NAME'] = $this->user->lang['FORUM_NAME_' . $forum_row['FORUM_ID']];
		}
		if (isset($this->user->lang['FORUM_DESC_' . $forum_row['FORUM_ID']]))
		{
			$forum_row['FORUM_DESC'] = $this->user->lang['FORUM_DESC_' . $forum_row['FORUM_ID']];
		}
		$event['forum_row'] = $forum_row;
	}

	public function display_forums_modify_category_template_vars($event)
	{
		$this->user->add_lang_ext('alg/quicklanguage', 'quicklanguage');
		$cat_row = $event['cat_row'];
		if (isset($this->user->lang['FORUM_NAME_' . $cat_row['FORUM_ID']]))
		{
			$cat_row['FORUM_NAME'] = $this->user->lang['FORUM_NAME_' . $cat_row['FORUM_ID']];
		}
		if (isset($this->user->lang['FORUM_DESC_' . $cat_row['FORUM_ID']]))
		{
			$cat_row['FORUM_DESC'] = $this->user->lang['FORUM_DESC_' . $cat_row['FORUM_ID']];
		}
		$event['cat_row'] = $cat_row;
}

	public function viewforum_get_topic_data($event)
	{
		$forum_data = $event['forum_data'];
		$forum_name = $forum_data['forum_name'];
		$forum_desc = $forum_data['forum_desc'];
		$forum_id = $forum_data['forum_id'];
		if (isset($this->user->lang['FORUM_NAME_' .  $forum_data['forum_id']]))
		{
			$forum_name = $this->user->lang['FORUM_NAME_' . $forum_id];
		}
		if (isset($this->user->lang['FORUM_DESC_' . $forum_id]))
		{
			$forum_desc = $this->user->lang['FORUM_DESC_' .$forum_id];
		}
		$this->template->assign_vars(array(
					'FORUM_NAME'	=> $forum_name,
					'FORUM_DESC'	=> $forum_desc,
				));
	}

	public function generate_forum_nav($event)
	{
		$this->user->add_lang_ext('alg/quicklanguage', 'quicklanguage');
		$navlinks = $event['navlinks'];
		if (isset($this->user->lang['FORUM_NAME_' . $navlinks['FORUM_ID']]))
		{
			$navlinks['FORUM_NAME'] = $this->user->lang['FORUM_NAME_' . $navlinks['FORUM_ID']];
			$event['navlinks'] = $navlinks;
		}
		$navlinks_parents = $event['navlinks_parents'];
		foreach($navlinks_parents as $key => $navlink)
		{
			$forum_id = $navlink['FORUM_ID'];
			if (isset($this->user->lang['FORUM_NAME_' .  $navlink['FORUM_ID']]))
			{
				$navlink['FORUM_NAME'] = $this->user->lang['FORUM_NAME_' . $navlink['FORUM_ID']];
				$navlinks_parents[$key] = $navlink;
			}
			$event['navlinks_parents'] = $navlinks_parents;
		}
	}

	public function request_cookie($name, $default = null)
	{
		$name = $this->config['cookie_name'] . '_' . $name;
		return $this->request->variable($name, $default, false, 3);
	}

	private function get_iso($l)
	{
		foreach ($this->lang_info as $lang)
		{
			if ($lang['lang_iso'] == $l)
			{
				return $lang['lang_iso'];
			}
		}
			return '';
	}
}
