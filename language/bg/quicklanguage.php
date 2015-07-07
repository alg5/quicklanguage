<?php
/** 
*
* Quick Language extension for the phpBB Forum Software package.
* Bulgarian translation by nickypopov (http://www.bulgaria-france.net)
*
* @copyright (c) 2015 alg
* @license GNU General Public License, version 2 (GPL-2.0)
*
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
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'QUICK_LANG_NO'	=> 'ISO =%s език не е инсталиран',
	'QUICK_LANG_EN_DISABLE'	=> 'Бързата смяна на езика е блокирана от администратора. Това можете да направите в Административния панел',
	'QUICK_LANG_TRANSLATE_POST'	=> 'Превод на',
	'QUICK_LANG_ORIGINAL_POST'	=> 'Показване на оригиналния текст',
// Скрита функция на английски за смяна имената на форумите например,техните описания, името на сайта, описанието на сайта и т.н.
// Използвайте файла на нужния език. За форум на френски, използвайте файла на английски или испански и т.н.
// 	'FORUM_NAME_1'	=> 'име на форума с ID номер 1',
// 	'FORUM_DESC_1'	=> 'описание на форума с ID номер 1',
// 	'FORUM_NAME_8'	=> 'име на форума с ID номер 8',
// 	'FORUM_DESC_8'	=> 'описание на форума с ID номер 8',
// 	'FORUM_NAME_9'	=> 'име на форума с ID номер 9',
// 	'SITENAME_NAME'	=> 'Име на сайта',
// 	'SITE_DESCRIPTION_NAME'	=> 'Описание на сайта',
// 	'SITE_HOME_NAME'	=> 'Описание на интернет-сайта',
// 	'INDEXPAGE_NAME'	=> 'Описание на заглавната страница на форума',
));
