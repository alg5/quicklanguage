<?php

/**
*
* @package quicklanguage
* @copyright (c) 2014 Alg
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2

*/

namespace alg\quicklanguage\acp;

/**
 * @ignore
 */

class acp_quicklanguage_module
{
	const API_YANDEX = 1;
	const API_BING = 2;
	public $u_action;

	public function main($id, $mode)
	{
		global $user, $template, $request, $config;

		$user->add_lang('acp/common');
		$this->tpl_name = 'acp_quicklanguage';
		$this->page_title = $user->lang('ACP_QUICK_LANGUAGE');

		$submit = (isset($_POST['submit'])) ? true : false;
		$form_key = 'quicklanguage';
		add_form_key($form_key);
		if (!check_form_key($form_key))
		{
			//trigger_error('FORM_INVALID');	//todo
		}

		$display_vars = array(
				'title'	=> 'ACP_QUICK_LANGUAGE',
				'vars'	=> array(
					'legend1'			=> '',
					'quicklanguage_allow_guests'				=> array('lang' => 'ACP_QUICK_LANGUAGE_ALLOW_GUESTS', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => true),
					'quicklanguage_is_english_show'			=> array('lang' => 'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => true),
					),
				);
		if (isset($display_vars['lang']))
		{
			$user->add_lang($display_vars['lang']);
		}
		$this->new_config = $config;
		$cfg_array = (isset($_REQUEST['config'])) ? utf8_normalize_nfc($request->variable('config', array('' => ''), true)) : $this->new_config;
		$error = array();

		// We validate the complete config if wished
		validate_config_vars($display_vars['vars'], $cfg_array, $error);

		if ($submit && !check_form_key($form_key))
		{
			$error[] = $user->lang['FORM_INVALID'];
		}
		// Do not write values if there is an error
		if (sizeof($error))
		{
			$submit = false;
		}
		// We go through the display_vars to make sure no one is trying to set variables he/she is not allowed to...
		//for first fieldset
		foreach ($display_vars['vars'] as $config_name => $null)
		{
			if (!isset($cfg_array[$config_name]) || strpos($config_name, 'legend') !== false)
			{
				continue;
			}

			$this->new_config[$config_name] = $config_value = $cfg_array[$config_name];

			if ($submit)
			{
				$config->set($config_name, $config_value);
			}
		}
		if ($submit)
		{
			$quicklanguage_is_link_translate_show = $request->variable('quicklanguage_is_link_translate_show', false);
			$config->set('quicklanguage_is_link_translate_show', $quicklanguage_is_link_translate_show);
				if($quicklanguage_is_link_translate_show)
				{
					$quicklanguage_translate_api_type = $request->variable('quicklanguage_translate_api_type', acp_quicklanguage_module::API_YANDEX);
					$config->set('quicklanguage_translate_api_type', $quicklanguage_translate_api_type);
					$quicklanguage_translate_api_type = $request->variable('quicklanguage_api_translate_key', '');
					$config->set('quicklanguage_translate_api_key', $quicklanguage_translate_api_type);
				}

				trigger_error($user->lang('CONFIG_UPDATED') . adm_back_link($this->u_action));
		}
		$this->page_title = $display_vars['title'];

		$template->assign_vars(array(
			'L_TITLE'			=> $user->lang[$display_vars['title']],
			'L_TITLE_EXPLAIN'	=> $user->lang[$display_vars['title'] . '_EXPLAIN'],
			'CHECKED_LNK_TRANSLATE'	=>  isset($config['quicklanguage_is_link_translate_show']) && $config['quicklanguage_is_link_translate_show'] ? 'checked' : '',
			'CHECKED_YANDEX'	=>  isset($config['quicklanguage_translate_api_type']) && $config['quicklanguage_translate_api_type']  ==  acp_quicklanguage_module::API_YANDEX ? 'checked' : '',
			'CHECKED_BING'	=>  isset($config['quicklanguage_translate_api_type']) && $config['quicklanguage_translate_api_type']  ==  acp_quicklanguage_module::API_BING? 'checked' : '',
			'QUICKLANGUAGE_API_TRANSLATE_KEY'	=>  isset($config['quicklanguage_translate_api_key']) ? $config['quicklanguage_translate_api_key']  : '',

			'S_ERROR'			=> (sizeof($error)) ? true : false,
			'ERROR_MSG'			=> implode('<br />', $error),
		));
		// Output relevant page
		foreach ($display_vars['vars'] as $config_key => $vars)
		{
			if (!is_array($vars) && strpos($config_key, 'legend') === false)
			{
				continue;
			}

			if (strpos($config_key, 'legend') !== false)
			{
				$template->assign_block_vars('options', array(
					'S_LEGEND'		=> true,
					'LEGEND'		=> (isset($user->lang[$vars])) ? $user->lang[$vars] : $vars)
				);

				continue;
			}

			$type = explode(':', $vars['type']);

			$l_explain = '';
			if ($vars['explain'] && isset($vars['lang_explain']))
			{
				$l_explain = (isset($user->lang[$vars['lang_explain']])) ? $user->lang[$vars['lang_explain']] : $vars['lang_explain'];
			}
			else if ($vars['explain'])
			{
				$l_explain = (isset($user->lang[$vars['lang'] . '_EXPLAIN'])) ? $user->lang[$vars['lang'] . '_EXPLAIN'] : '';
			}

			$content = build_cfg_template($type, $config_key, $this->new_config, $config_key, $vars);

			if (empty($content))
			{
				continue;
			}

			$template->assign_block_vars('options', array(
				'KEY'			=> $config_key,
				'TITLE'			=> (isset($user->lang[$vars['lang']])) ? $user->lang[$vars['lang']] : $vars['lang'],
				'S_EXPLAIN'		=> $vars['explain'],
				'TITLE_EXPLAIN'	=> $l_explain,
				'CONTENT'		=> $content,
				)
			);

			unset($display_vars['vars'][$config_key]);

		}
	}
}
