<?php
/**
*
* Quick Language extension for the phpBB Forum Software package.
* French translation by Galixte (http://www.galixte.com)
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
	'QUICK_LANG_NO'	=> 'La langue ISO =%s n’est pas installée',
	'QUICK_LANG_EN_DISABLE'	=> 'Le changement rapide de langue est bloqué par l’administrateur. Il est possible de réaliser cette action depuis le panneau d’administration.',
	'QUICK_LANG_TRANSLATE_POST'	=> 'Traduire en',
	'QUICK_LANG_ORIGINAL_POST'	=> 'Afficher le texte original',
// Fonctionnalité cachée : permet de remplacer les noms des forums, leurs descriptions, le nom du site, sa description, etc.. dans une ou plusieurs des autres langues installées sur son forum.
// Si la langue française est utilisée par défaut, pour remplacer les noms cités ci-dessus par exemple, en anglais, utiliser le fichier de la langue anglaise de l’extension pour remplir les champs ci-dessous.
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
