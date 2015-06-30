<?php

/**
*
* @package quicklanguage [English]
* @copyright (c) 2014 Alg
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'ACP_QUICK_LANGUAGE'						=> 'تغيير اللغة',
	'ACP_QUICK_LANGUAGE_EXPLAIN'				=> 'إصافة أيقونات (أعلام) في أعلى جميع الصفحات للتغيير السريع بين اللغات',
	'ACP_QUICK_LANGUAGE_SETTINGS'				=> 'الإعدادات',
	'ACP_QUICK_LANGUAGE_SETTINGS_COMMON'				=> 'إعدادات عامة',
	'ACP_QUICK_LANGUAGE_SETTINGS_SHOW'				=> 'مُشاهدة الإعدادات',

	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW'			=> 'إظهار اللغة الإنجليزية ',
	'ACP_QUICK_LANGUAGE_IS_ENGLISH_SHOW_EXPLAIN'	=> 'سيتم إظهار أيقونة ( العلم ) للغة الإنجليزية بصورة أفتراضية.<br />من المستحسن تعطيل هذا الخيار للمنتديات الناطقة بغير اللغة الإنجليزية.',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS'			=> 'يستطيع الزائرين تغيير اللغة ',
	'ACP_QUICK_LANGUAGE_ALLOW_GUESTS_EXPLAIN'	=> 'اختيارك "نعم" يعني السماح للزائرين بتغيير اللغات أيضاً. وبما أنهم لم يسجلوا دخولهم للمنتدى , سيتم استخدام الكوكيز ( ملف تعريف الإرتباط ) في حفظ اللغة التي تم تحديدها بواسطتهم.',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW'			=> 'إظهار رابط "الترجمة" ',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW_EXPLAIN'	=> 'سيتم عرض رابط الترجمة أسفل كل مشاركة إذا حددت هذه الخدمة. الترجمة تعمل حالياً بواسطة الخدمة : yandex api فقط <br />سيتم إضافة خدمات ترجمة أخرى في المستقبل إن شاء الله',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SHOW_EXPLAIN_1'	=> 'تحذير ! الترجمة تعمل بواسطة خدمات خارجية. لإستعمال هذه الخدمات , يجب أن يكون لديك مفتاح API. ويمكن الحصول على مفتاح الـ API مجاناً بالنقر على إسم الخدمة التي تريدها أدناه. لن يتم عرض رابط الخدمة في منتداك بدون إضافة مفتاح الـ API.',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_GET_KEY'			=> 'احصل على مفتاح الـ API"',
	'ACP_QUICKLANGUAGE_IS_LINK_TRANSLATE_SET_KEY'			=> 'إضافة مفتاح الـ API هنا',
));
