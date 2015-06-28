<?php
/** 
*
* quicklanguage [Ukrainian]
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
	'QUICK_LANG_NO'			=> 'мовний пакет ISO =%s не встановлений',
	'QUICK_LANG_EN_DISABLE'		=> 'швидка зміна на англійську мову заборонена адміністратором. ви можете змінити мову через особистий розділ.',
	'QUICK_LANG_TRANSLATE_POST'	=> 'Переклад',
	'QUICK_LANG_ORIGINAL_POST'	=> 'Показати текст оригіналу',
	//for example
	'FORUM_NAME_1'	=> 'Чавунок',
	'FORUM_DESC_1'	=> 'форум для розігрування питань',
	'FORUM_NAME_8'	=> 'Hайд-парк',
	'FORUM_DESC_8'	=> 'не цензурні питання',
	'FORUM_NAME_9'	=> 'Зробити б життя з кого..',
	'SITENAME_NAME'	=> 'ваш_домен.uk',
	'SITE_DESCRIPTION_NAME'	=> 'Короткий опис вашої конференції',
	'SITE_HOME_NAME'	=> 'Домашня сторінка',
	'INDEXPAGE_NAME'	=> 'Головна сторінка',

	));
