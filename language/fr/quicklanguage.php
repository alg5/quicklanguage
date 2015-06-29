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
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'QUICK_LANG_NO'	=> 'La langue ISO =%s n’est pas installée',
	'QUICK_LANG_EN_DISABLE'	=> 'Le changement rapide de langue est bloqué par l’administrateur. Il est possible de réaliser cette action depuis le panneau d’administration.',
	'QUICK_LANG_TRANSLATE_POST'	=> 'Traduire en',
	'QUICK_LANG_ORIGINAL_POST'	=> 'Afficher le texte original',
// Fonction cachée pour remplacer par exemple en anglais les noms des forums, leurs descriptions, le nom du site, sa description, etc..
// Vous devez utiliser le fichier de langue qui vous intéresse. Si votre forum est français, vous allez utiliser le fichier de langue anglais, ou espagnol, etc..
// 	'FORUM_NAME_1'	=> 'nom du forum ayant l’ID numéro 1',
// 	'FORUM_DESC_1'	=> 'description du forum ayant l’ID numéro 1',
// 	'FORUM_NAME_8'	=> 'nom du forum ayant l’ID numéro 8',
// 	'FORUM_DESC_8'	=> ' description du forum ayant l’ID numéro 8',
// 	'FORUM_NAME_9'	=> 'nom du forum ayant l’ID numéro 9',
// 	'SITENAME_NAME'	=> 'Nom du site',
// 	'SITE_DESCRIPTION_NAME'	=> 'Description du site',
// 	'SITE_HOME_NAME'	=> 'Libellé du site internet',
// 	'INDEXPAGE_NAME'	=> 'Libellé de l’index du forum',
));
