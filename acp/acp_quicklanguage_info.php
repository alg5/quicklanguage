<?php

/**
*
* @package quicklanguage
* @copyright (c) 2014 Алг
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace alg\quicklanguage\acp;

class quicklanguage_info
{

	function module()
	{
		return array(
			'filename'	=> '\alg\quicklanguage\acp\acp_quicklanguage_module',
			'title'		=> 'ACP_QUICK_LANGUAGE',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'quicklanguage'			=> array('title' => 'ACP_QUICK_LANGUAGE_SETTINGS', 'auth' => 'ext_alg/quicklanguage && acl_a_board', 'cat' => array('ACP_QUICK_LANGUAGE')),
			),
		);
	}
}
