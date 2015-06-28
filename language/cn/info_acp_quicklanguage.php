<?php

/**
*
* @package Quick LANGUAGE [Chinese]
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
	'ACP_QUICK_LANGUAGE'						=> '快速变化的语言',
	'ACP_QUICK_LANGUAGE_EXPLAIN'				=> '添加的能力来选择从每个页面的语言',
	'ACP_QUICK_LANGUAGE_SETTINGS'				=> '设置',
	'ACP_QUICK_LANGUAGE_SETTINGS_COMMON'				=> '常规设置',
	'ACP_QUICK_LANGUAGE_SETTINGS_SHOW'				=> '显示设置',

	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW'			=> '秀英语',
	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW_EXPLAIN'	=> '默认的图标切换到英语将可供选择。 <br />对于讲英语的论坛建议关闭此选项',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS'			=> '让客人改变语言',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS_EXPLAIN'	=> '默认情况下，客人可以更改会议的语言。客人可以选择将在本地浏览器缓存（不支持您的浏览器IE的版本被记住8及以下',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW'			=> 'Show link "translate"',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW_EXPLAIN'	=> 'If selected, the link will be shown at the bottom of each post.  At the moment translation works only through api yandex, <br /> in the future is expected to add a translation alternatives',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW_EXPLAIN_1'	=> 'Warning! Translation works via external services. To access the service, you must have API-key, the key can be obtained free of charge by clicking the link selected service. If the key is not entered, the link will not be displayed',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_GET_KEY'			=> 'Get the API-ключ"',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SET_KEY'			=> 'Enter the API-ключ',
));
