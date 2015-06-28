<?php

/**
*
* @package Quick LANGUAGE [Russian]
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
	'ACP_QUICK_LANGUAGE'						=> 'Быстрая смена языка',
	'ACP_QUICK_LANGUAGE_EXPLAIN'				=> 'Добавление возможности выбора языка с каждой страницы',
	'ACP_QUICK_LANGUAGE_SETTINGS'				=> 'Установки',
	'ACP_QUICK_LANGUAGE_SETTINGS_COMMON'				=> 'Общие установки',
	'ACP_QUICK_LANGUAGE_SETTINGS_SHOW'				=> 'Установки отображения',

	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW'			=> 'Показывать английский язык',
	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW_EXPLAIN'	=> 'По умолчанию иконка переключения на английский будет доступна для выбора. <br />Для неанглоязычных форумов рекомендуется отключать эту опцию',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS'			=> 'Разрешить гостям смену языка',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS_EXPLAIN'	=> 'По умолчанию гости могут менять язык конференции. Выбор гостя будет запоминаться в локальной памяти браузера (не поддерживается браузером ИЕ версии 8 и ниже',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW'			=> 'Показывать ссылку "перевести"',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW_EXPLAIN'	=> 'Если опция выбрана,  ссылка на перевод показывается внизу каждого поста. На данный момент перевод осуществляется только через api yandex, <br /> в дальнейшем предполагается добавить альтернативные возможности перевода',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW_EXPLAIN_1'	=> 'Внимание! Перевод осуществляется через внешние сервисы. Для обращения к сервису, вам необходимо иметь API-ключ, ключ можно получить бесплатно, кликнув по ссылке выбранного сервиса. Если ключ не введен,  ссылка отображаться не будет',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_GET_KEY'			=> 'Получить API-ключ"',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SET_KEY'			=> 'Введите API-ключ',
));
