<?php

/**
*
* @package Quick LANGUAGE [Spanish]
* @copyright (c) 2014 PayBas
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
	'ACP_QUICK_LANGUAGE'							=> 'Швидка зміна мови',
	'ACP_QUICK_LANGUAGE_EXPLAIN'					=> 'Додавання можливості вибору мови на всіх сторінках',
	'ACP_QUICK_LANGUAGE_SETTINGS'					=> 'Налаштування',
	'ACP_QUICK_LANGUAGE_SETTINGS_COMMON'			=> 'Загальні налаштування',
	'ACP_QUICK_LANGUAGE_SETTINGS_SHOW'				=> 'Налаштування показу',

	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW'			=> 'Показувати англійську мову',
	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW_EXPLAIN'	=> 'За замовчуванням іконка перемикання на англійську буде доступна. <br /> Для неангломовних форумів рекомендується відключати цю опцію.',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS'				=> 'Дозволити гостям зміну мови',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS_EXPLAIN'		=> 'За замовчуванням гості можуть міняти мову форуму. Вибір гостя буде запам\'ятовуватися в локальній пам\'яті браузера (не підтримується браузером IЕ версії 8 і нижче.',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW'			=> 'Show link "translate"',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW_EXPLAIN'	=> 'If selected, the link will be shown at the bottom of each post.  At the moment translation works only through api yandex, <br /> in the future is expected to add a translation alternatives',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW_EXPLAIN_1'	=> 'Warning! Translation works via external services. To access the service, you must have API-key, the key can be obtained free of charge by clicking the link selected service. If the key is not entered, the link will not be displayed',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_GET_KEY'			=> 'Get the API-ключ"',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SET_KEY'			=> 'Enter the API-ключ',
));
