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
	'ACP_QUICK_LANGUAGE'						=> 'Бърза смяна на езика',
	'ACP_QUICK_LANGUAGE_EXPLAIN'				=> 'Позволява смяна на езика с показване на знамена отгоре на всяка страница.',
	'ACP_QUICK_LANGUAGE_SETTINGS'				=> 'Настройки',
	'ACP_QUICK_LANGUAGE_SETTINGS_COMMON'				=> 'Общи настройки',
	'ACP_QUICK_LANGUAGE_SETTINGS_SHOW'				=> 'Показване на настройките',

	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW'			=> 'Показване на знамената',
	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW_EXPLAIN'	=> 'По подразбиране се показва знаме с текст на английски.<br />Показват се толкова знамена,колкото езици са инсталирани.',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS'         => 'Позволява на гости смяна на езика',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS_EXPLAIN'   => 'Тази настройка позволява на гости смяната на езика.При посещение без вписване ще се инсталират бисквитки на посетителския компютър, за да се определи език при следващото посещение.',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW'			=> 'Показване на линк « Преведи на »',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW_EXPLAIN'	=> 'При активация, линкът ще се показва под всяко съобщение. Преводът се осъществява с API-то на Yandex-услугата.<br />Съвсем скоро ще се появи и друга услуга за превод.',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW_EXPLAIN_1'	=> 'Имайте предвид, че преводът се осъществява от външен доставчик на услугата. За достъп до тази услуга трябва да си набавите ключ за това API. Ключът може да бъде получен безплатно натискайки върху линка на избраната услуга. Ако не е установен ключ, линкът няма да се появи.',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_GET_KEY'			=> 'Получаване API-ключ',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SET_KEY'			=> 'Установяване на ключ за API-то',
));
