<?php

/**
*
* @package Quick Language
* @copyright (c) 2014 Alg
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*/

namespace alg\quicklanguage\migrations;


class v_1_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['quicklanguage_version']) && version_compare($this->config['quicklanguage_version'], '1.0.*', '>=');
	}

	 public function update_schema()
	{
		return 	array();
	}

	public function revert_schema()
	{
		return 	array();
	}

	 
	public function update_data()
	{
		return array(
			array('config.add', array('quicklanguage_version', '1.0.0')),
			array('config.add', array('quick_language_allow_guests', '1')),
			array('config.add', array('quick_language_is_english_show', '1')),

		    // Add ACP modules
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_QUICK_LANGUAGE')),

			array('module.add', array('acp', 'ACP_QUICK_LANGUAGE', array(
					'module_basename'	=> '\alg\quicklanguage\acp\acp_quicklanguage_module',
					'module_langname'	=> 'ACP_QUICK_LANGUAGE_SETTINGS',
					'module_mode'		=> 'quicklanguage',
					'module_auth'		=> 'ext_alg/quicklanguage && acl_a_board',
			    ))),
		);
	}

	public function revert_data()
	{
		return array(
			// remove from configs
				array('config.remove', array('quick_language_allow_guests')),
				array('config.remove', array('quick_language_is_english_show')),
			// Current version
				array('config.remove', array('quicklanguage_version')),

			// remove from ACP modules
			array('if', array(
				array('module.exists', array('acp', 'ACP_QUICK_LANGUAGE', array(
					'module_basename'	=> '\alg\quicklanguage\acp\acp_quicklanguage_module',
					'module_langname'	=> 'ACP_QUICK_LANGUAGE_SETTINGS',
					'module_mode'		=> 'quicklanguage',
					'module_auth'		=> 'ext_alg/quicklanguage && acl_a_board',
					),
				)),
				array('module.remove', array('acp', 'ACP_QUICK_LANGUAGE', array(
					'module_basename'	=> '\alg\quicklanguage\acp\acp_quicklanguage_module',
					'module_langname'	=> 'ACP_QUICK_LANGUAGE_SETTINGS',
					'module_mode'		=> 'quicklanguage',
					'module_auth'		=> 'ext_alg/quicklanguage && acl_a_board',
					),
				)),
			)),
			array('module.remove', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_QUICK_LANGUAGE')),
		);
	}
}
