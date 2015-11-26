<?php
/** 
*
* quicklanguage [Turkey]
* Turkey translation by ZNC 
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
	'QUICK_LANG_NO'   => 'ISO =%s lisan paketi yüklenmemiş',
	'QUICK_LANG_EN_DISABLE'   => 'Administratör tarafından ingilizceye hızlı dönüş bloke edilmiştir. Bunu ancak UCP bölümünde gerçekleştirebilirsin',
	'QUICK_LANG_TRANSLATE_POST'   => 'Tercüme et',
	'QUICK_LANG_ORIGINAL_POST'   => 'Orijinal teksti göster',
	'SITENAME_NAME'            => 'Balıkcılar forumu',
	'SITE_DESCRIPTION_NAME'      => 'Konumuz: Balık avı',
));
