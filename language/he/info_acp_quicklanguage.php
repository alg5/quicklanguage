<?php

/**
*
* @package quicklanguage [Hebrew]
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
	'ACP_QUICK_LANGUAGE'						=> 'החלפה מהירה בין שפות.',
	'ACP_QUICK_LANGUAGE_EXPLAIN'				=> 'הוספת אפשרות בחירת שפה בכל עמוד',
	'ACP_QUICK_LANGUAGE_SETTINGS'				=> 'הגדרות',
	'ACP_QUICK_LANGUAGE_SETTINGS_COMMON'				=> 'הגדרות כלליות',
	'ACP_QUICK_LANGUAGE_SETTINGS_SHOW'				=> 'הגדרות תצוגה',

	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW'			=> 'להציג את הלחצן "לשנות שפה לאנגלית"',
	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW_EXPLAIN'	=> 'האפשרות לשנות את השפה לאנגלית כברירת מחדל תהיה פעילה. <br />מומלץ להסיר אפשרות זו לפורומים בהם האוכלוסיה אינה דוברת אנגלית',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS'			=> 'להרשות לאורחים להחליף שפה',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS_EXPLAIN'	=> 'כברירת מחדל אורחים רשאים להחליף את שפת הפורום. הבחירה של האורח תשמר בזכרון המקומי של הדפדפן (לא נתמך בדפדפנים מגרסא IE8 ומעטה)',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW'			=> 'להציג קישור "לתרגם"',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW_EXPLAIN'	=> 'Если опция выбрана,  ссылка на перевод показывается внизу каждого поста. На данный момент перевод осуществляется только через api yandex, <br /> в дальнейшем предполагается добавить альтернативные возможности перевода',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW_EXPLAIN_1'	=> 'Внимание! Перевод осуществляется через внешние сервисы. Для обращения к сервису, вам необходимо иметь API-ключ, ключ можно получить бесплатно, кликнув по ссылке выбранного сервиса. Если ключ не введен,  ссылка отображаться не будет',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_GET_KEY'			=> 'Получить API-ключ"',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SET_KEY'			=> 'Введите API-ключ',

	'ACP_QUICK_LANGUAGE_EXPLAIN'				=> 'שפות ?????? (???) ????? ?? ?? ???? ????? ????? ????? ??? ???? ????? ',
	'ACP_QUICK_LANGUAGE_SETTINGS'				=> '??????',
	'ACP_QUICK_LANGUAGE_SETTINGS_COMMON'				=> '?????? ??????',
	'ACP_QUICK_LANGUAGE_SETTINGS_SHOW'				=> '??? ???????',

	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW'			=> '?????? ??????',
	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW_EXPLAIN'	=> '?????? ????? ???? ??????? ????? ?????? ????. ????? ?? ????? ?????? ????? ????? ?????? ????? ????? ?????? ??',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS'			=> '????? ??????? ?????? ???',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS_EXPLAIN'	=> '????? ?? ?????? ???????? ????? ?????? ?????? ??? ?????. ?????? ??? ??? ????? ?????? ???? ?????? ?? ??????',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW'			=> 'Show link "translate"',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW_EXPLAIN'	=> 'If selected, the link will be shown at the bottom of each post.  At the moment translation works only through api yandex, <br /> in the future is expected to add a translation alternatives',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW_EXPLAIN_1'	=> 'Warning! Translation works via external services. To access the service, you must have API-key, the key can be obtained free of charge by clicking the link selected service. If the key is not entered, the link will not be displayed',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_GET_KEY'			=> 'Get the API-ключ"',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SET_KEY'			=> 'Enter the API-ключ',
));
