<?php
/** 
*
* quicklanguage [English]
*
* @package quicklanguage
* @copyright (c) 2014 alg
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
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
	'QUICK_LANG_NO'	=> 'Language Pack ISO =%s not installed',
	'QUICK_LANG_EN_DISABLE'	=> 'Quick switch on English is blocked by administrator. You can do this action in the UCP ',
	'QUICK_LANG_TRANSLATE_POST'	=> 'Translate to',
	'QUICK_LANG_ORIGINAL_POST'	=> 'Show original text',
// Hidden functionality to replace by example in french the forums names, the forums descriptions, the site name, the site description, etc..
// You can use the language file that interests you. if your forum is English, you use the French language file, or Spanish, etc ..
// 	'FORUM_NAME_1'	=> 'Forum/Category name having the id number 1',
// 	'FORUM_DESC_1'	=> 'Forum/Category Description having the id number 1',
// 	'FORUM_NAME_8'	=> 'Forum/Category name having the id number 8',
// 	'FORUM_DESC_8'	=> 'Forum/Category description having the id number 8',
// 	'FORUM_NAME_9'	=> 'Forum/Category name having the id number 9',
// 	'SITENAME_NAME'	=> 'Site name',
// 	'SITE_DESCRIPTION_NAME'	=> 'Site description',
// 	'SITE_HOME_NAME'	=> 'Main website URL',
// 	'INDEXPAGE_NAME'	=> 'Board index text',
));
