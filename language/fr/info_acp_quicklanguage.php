<?php

/** 
*
* quicklanguage [French]
* French translation by Galixte (http://www.galixte.com)
*
* @package quicklanguage
* @copyright (c) 2014 alg
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
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

$lang = array_merge($lang, array(
	'ACP_QUICK_LANGUAGE'						=> 'Langue rapide',
	'ACP_QUICK_LANGUAGE_EXPLAIN'				=> 'Permet de changer de langue en affichant des icônes (drapeaux) dans le haut de chaque page.',
	'ACP_QUICK_LANGUAGE_SETTINGS'				=> 'Paramètre',
	'ACP_QUICK_LANGUAGE_SETTINGS_COMMON'				=> 'Paramètre commun',
	'ACP_QUICK_LANGUAGE_SETTINGS_SHOW'				=> 'Voir le paramètre',

	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW'			=> 'Afficher l’anglais',
	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW_EXPLAIN'	=> 'Par défaut une icône pour l’anglais sera affichée. <br />Pour les forums qui ne pratiquent pas l’anglais il est recommandé de désactiver cette option.',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS'			=> 'Permettre aux invités de changer de langue',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS_EXPLAIN'	=> 'Ce paramètre permet aux invités de changer aussi de langue. Tant qu’il ne sont pas connectés, un cookie sera utilisé pour mémoriser la langue sélectionnée.',
));
