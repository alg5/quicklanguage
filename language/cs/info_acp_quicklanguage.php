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
	'ACP_QUICK_LANGUAGE'						=> 'Rychlé jazyky',
	'ACP_QUICK_LANGUAGE_EXPLAIN'				=> 'Přidá ikonky(vlajky) do hlavičky každé stránky pro rychlou změnu jazyka',
	'ACP_QUICK_LANGUAGE_SETTINGS'				=> 'Nastavení',
	'ACP_QUICK_LANGUAGE_SETTINGS_COMMON'				=> 'Standartní nastavení',
	'ACP_QUICK_LANGUAGE_SETTINGS_SHOW'				=> 'Zobrazit nastavení',

	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW'			=> 'Zobrazit angličtinu',
	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW_EXPLAIN'	=> 'Standartné ikonka pro Angličtinu bude zobrazena<br />Pro neanglicky mluvící fóra doporučujeme tuto možnost vypnout',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS'			=> 'Povolit nezaregistrovaným uživatelům měnit jazyk',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS_EXPLAIN'	=> 'Toto nastavení povolí nezaregistrovaným návštěvníkům změnit jazyk. Jelikož nejsou přihlášeni, tak bude použita cookie pro uloženi jejich volby.',
));
