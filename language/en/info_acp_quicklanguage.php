<?php

/**
*
* @package quicklanguage [English]
* @copyright (c) 2014 Alg
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_QUICK_LANGUAGE'						=> 'Quick Language',
	'ACP_QUICK_LANGUAGE_EXPLAIN'				=> 'Adds an icons(flags) to the header of every page for quick switching between languages',
	'ACP_QUICK_LANGUAGE_SETTINGS'				=> 'Setting',
	'ACP_QUICK_LANGUAGE_SETTINGS_COMMON'				=> 'Common Setting',
	'ACP_QUICK_LANGUAGE_SETTINGS_SHOW'				=> 'View Settings',

	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW'			=> 'Show English',
	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW_EXPLAIN'	=> 'By default icon for English will be displayed <br />For non-English speaking forums it is recommended to set this setting off',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS'			=> 'Allow guests to change languages',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS_EXPLAIN'	=> 'This setting will allow guest visitors to change languages as well. Since they are not logged-in, a cookie will be used to remember their selected language',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW'			=> 'Show "translate" link',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW_EXPLAIN'	=> 'If selected, the link will be shown at the bottom of each post.  At the moment translation works only through yandex api, <br /> It is expected in the future to add some translation alternatives',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW_EXPLAIN_1'	=> 'Warning! The translation works via external services. To access the service, you must have API-key, the key can be obtained free of charge by clicking the link of the selected service. If the key is not entered, the link will not be displayed',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_GET_KEY'			=> 'Get the API-key"',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SET_KEY'			=> 'Enter the API-key',
));
