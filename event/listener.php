<?php

/**
*
* @package quicklanguage
* @copyright (c) 2014 Alg
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace alg\quicklanguage\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{

	const OK= 0;
	const QUICK_LANG_NO = 1;
	const QUICK_LANG_EN_DISABLE = 2;

	public function __construct(\phpbb\config\config $config, \phpbb\db\driver\driver_interface $db, \phpbb\request\request_interface $request, \phpbb\template\template $template, \phpbb\user $user, $root_path, $php_ext)
	{
		$this->config = $config;
		$this->db = $db;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
		$this->root_path = $root_path;
		$this->php_ext = $php_ext;

		// Setup the common settings
		$this->allow_guests = isset($config['quick_language_allow_guests']) ? (bool) $config['quick_language_allow_guests'] : true;
		$this->is_english_show = isset($config['quick_language_is_english_show']) ? (bool) $config['quick_language_is_english_show'] : true;
		$this->error = listener::OK;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'			=> 'user_setup',
			'core.page_header_after'=> 'page_header_after',
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
//$res = ''; //debug
//$res = 'en'; //debug
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
		if (!$this->quick_language_enable)
		{
			return;
		}
		$this->user->add_lang_ext('alg/quicklanguage', 'quicklanguage');
		$url_back = $this->set_back_url();

		$this->template->assign_vars(array(
			'U_QUICK_LANG_ACTION'	=>  $url_back,
			'S_QUICK_LANGUAGE_ENABLE'	=> (bool) $this->quick_language_enable,
			'S_CURRENT_LANG'	=>	$this->current_lang,
			//'U_FORUM_LS_PATH'				  => append_sid("{$this->phpbb_root_path}liveSearch/forum/0/0"),
			));

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
			}
		}
		//todo
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
	public function request_cookie($name, $default = null)
	{
		$name = $this->config['cookie_name'] . '_' . $name;
		return $this->request->variable($name, $default, false, 3);
	}

	private function set_back_url()
	{
		$page = $this->user->page;
		if ($page['page_name'] == 'viewforum.php' || $page['page_name'] == 'index.php' ||$page['page_name'] == 'search.php' )
		{
			return str_replace('&amp;', '&', $this->user->page['page']);
		}
		if ($page['page_name'] == 'viewtopic.php')
		{
			$url =  str_replace('&amp;', '&', $this->user->page['page']);
			return str_replace('amp%3B', '', $url);
		}
		// Remove 'app.php/' from the page, when rewrite is enabled
		if ($this->config['enable_mod_rewrite'] && strpos($page['page_name'] , 'app.' . $this->php_ext . '/') === 0)
		{
			return  str_replace('app.' . $this->php_ext . '/', '', $this->user->page['page']);
		}
		return str_replace('&amp;', '&', $this->user->page['page']);
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
