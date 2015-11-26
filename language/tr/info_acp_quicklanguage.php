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
	'ACP_QUICK_LANGUAGE'	=> 'Hızlı lisan seçeneği',
	'ACP_QUICK_LANGUAGE_EXPLAIN'	=> 'Lisan şalterini (bayrak) her sayfaya ilave eder',
	'ACP_QUICK_LANGUAGE_SETTINGS'	=> 'Ayarlar',
	'ACP_QUICK_LANGUAGE_SETTINGS_COMMON'	=> 'Genel ayarlar',
	'ACP_QUICK_LANGUAGE_SETTINGS_SHOW'	=> 'Gösterme ayarları',

	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW'	=> 'İngilizceyi göster',
	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW_EXPLAIN'	=> 'Standart olarak ingilizcede seçeneklere dahildir.<br />İngilizce kullanılmıyan forumlarda bu seçilmemeli',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS'	=> 'Misafirler lisanı değiştirebilirler',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS_EXPLAIN'	=> 'Misafirlerde öylece lisan seçebilirler. Seçilen lisan cookie üzeri hatırlanır (ancak IE 8 ve ondan eski versiyonlar bunu desteklememekte)',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW'	=> '"Tercüme et" linkini göster',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW_EXPLAIN'	=> 'Öylece her katılımın aşasında "Tercüme et" linki gösterilir. Şu an yandex tercüme APİsi kullanılmakta, gelecekte farklı alternatifler sunulcak',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW_EXPLAIN_1'	=> 'Dikkat! Bu tercüme hizmeti dışta kalan servis üzeri uygulanmakta. Bu hizmeti kullanmak için APİ-anahtarı gerekmekte. Yürürsüz anahtar "Tercüme et" linkin gösterilmemesinle sonuçlanır',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_GET_KEY'	=> 'APİ-anahtarına başvur"',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SET_KEY'	=> 'geçerli APİ-anahtarını gir',
));
