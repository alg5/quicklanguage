<?php

/**
*
* @package quicklanguage [Ukrainian]
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
	'ACP_QUICK_LANGUAGE'							=> 'Швидка зміна мови',
	'ACP_QUICK_LANGUAGE_EXPLAIN'					=> 'Додавання можливості вибору мови на всіх сторінках',
	'ACP_QUICK_LANGUAGE_SETTINGS'					=> 'Налаштування',
	'ACP_QUICK_LANGUAGE_SETTINGS_COMMON'			=> 'Загальні налаштування',
	'ACP_QUICK_LANGUAGE_SETTINGS_SHOW'				=> 'Налаштування показу',

	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW'			=> 'Показувати англійську мову',
	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW_EXPLAIN'	=> 'За замовчуванням іконка перемикання на англійську буде доступна. <br /> Для неангломовних форумів рекомендується відключати цю опцію.',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS'				=> 'Дозволити гостям зміну мови',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS_EXPLAIN'		=> 'За замовчуванням гості можуть міняти мову форуму. Вибір гостя буде запам\'ятовуватися в локальній пам\'яті браузера (не підтримується браузером IЕ версії 8 і нижче.',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW'			=> 'Показувати посилання "Переклад"',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW_EXPLAIN'	=> 'Якщо опція вибрана, посилання на переклад з\'являється внизу кожного посту. На даний момент переклад здійснюється тільки через API Yandex, <br /> надалі передбачається додати альтернативні можливості переведення.',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW_EXPLAIN_1'	=> 'Увага! Переклад здійснюється через зовнішні сервіси. Для звернення до сервісу, вам необхідно мати API-ключ, ключ можливо отримати безкоштовно, натиснувши на посилання обраного сервісу. Якщо ключ не введений, посилання відображатися не буде.',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_GET_KEY'			=> 'Отримати API-ключ',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SET_KEY'			=> 'Додайте API-ключ',
));
