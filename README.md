quicklanguage
=============
[![Build Status](https://travis-ci.org/alg5/quicklanguage.svg?branch=master)](https://travis-ci.org/alg5/quicklanguage)

Extension for phpBB 3.1 lets visitors switch quickly the board language.


## Features
- Adds an icons for each installed language to the header, detects a selection change and triggers a board language change as through the UCP.
- Automatically redirects back to the original page being viewed after language has changed.
- Works for guests too, but uses a special cookie instead.
- ACP module to set guest access and show icon for English.
- Adds a "translate to" link and combobox with an option to choose a language at the bottom of each post.

##Hidden features ("Easter Egg")
Admin adds the following lines to appropriate language file for those names of categories/forums that he wants to see in different languages:

FORUM_NAME_N, where N - ID of the forum/category
<br />
FORUM_DESC_N, where N - ID of the forum/category
<br />
Following lines rename some text values of the board
SITENAME_NAME - SITENAME
<br />
SITE_DESCRIPTION_NAME - SITE_DESCRIPTION
<br />
SITE_HOME_NAME- SITE_HOME
<br />
INDEXPAGE_NAME_NAME - INDEXPAGE
<br />



The extension checks if the appropriate language variable exists. if it does, then the variable displays as the title. Otherwise, the title will remain default, as it was stored in the database (same applies to the description of the forum/category).

#### Requirements
- phpBB 3.1-RC5 or higher
- PHP 5.3.3 or higher

#### Supported languages 
- Arabic
- Bulgarian
- Chinese
- Сzech
- Deutsch
- English
- French
- Hebrew
- Russian
- Ukrainian

#### To do list
- responsive layout.
- check user data and return error message to user
- an ability to translate selected text
- extended translation block with wide options

## Installation
1. [Download the latest release](https://github.com/alg5/quicklanguage) and unzip it.
2. Copy the entire contents from the unzipped folder to `/ext/alg/quicklanguage/`.
3. Navigate in the ACP to `Customise -> Manage extensions`.
4. Find `Quick Language` under "Disabled Extensions" and click `Enable`.

## Uninstallation
1. Navigate in the ACP to `Customise -> Manage extensions`.
2. Click the `Disable` link for `Quick Language`.
3. To permanently uninstall, click `Delete Data`, then delete the `quicklanguage` folder from `/ext/alg/`.

### License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)

 P.S. Icon for each language must  be picture 16X16 pixels with ext ".png" and located in the /ext/alg5/quicklanguage/styles/all/theme/images/flags
Icons of flags can be downloaded from www.gosquared.com/download/pixels/flags.zip


Данное расширение позволяет быстро переключать язык конференции.


## Возможности расширения
- Добавление иконки для каждого установленного языкового пакета в шапку страницы, определение выбранного языка и переключение языка , как в панели пользователя
- Возврат к той странице, с которой было сделано переключение языка
- расширение позволяет переключать язык гостям конференции, используя куки для сохранения состояния
- ACP module to set guest access and show icon for English`
- В настройках расширения( в панели администратора) можно установить гостевой доступ и показ/сокрытие иконки английского языка
- Добавление ссылки "перевод на" и комбо с возможностью выбора языка под каждым постом

## Скрытые возможности  ("пасхальное яйцо") расширения
Админ, для тех названий категорий/форумов, которые он хочет видеть на разных языках, добавляет в свой языковой файл строки по принципу

FORUM_NAME_N, где N - айди форума/категории
FORUM_DESC_N, где N - айди форума/категории
Следующие строки переопределяют некоторые обшие текстовые значения конференции
SITENAME_NAME - SITENAME
<br />
SITE_DESCRIPTION_NAME - SITE_DESCRIPTION
<br />
SITE_HOME_NAME- SITE_HOME
<br />
INDEXPAGE_NAME_NAME - INDEXPAGE
<br />

Расширение проверит, есть ли соответствующая языковая переменная, если есть, то выведет её в качестве названия, если нет, название останется стандартным, как было записано в базе( то же самое относится и к описанию форума/категории)


#### Требования
- phpBB 3.1-RC3 или выше
- PHP 5.3.3 или выше

#### Поддерживаемые языки
- Английский
- Арабский
- Болгарский
- Иврит
- Китайский
- Немецкий
- Русский
- Украинский
- Французский
- Чешский

#### To do список( планируется)
-  аддаптивный дизайн
- Проверка данных пользователя и возвращение пользователю индикации об ошибке
- возможность перевода выделенного текста
 - расширенный блок перевода с различными опциями

## Инсталляция
1. [Скачать ](https://github.com/alg5/quicklanguage) и разархивировать.
2.Скопировать содержимое/ext/alg/quicklanguage/`.
3. Перейти в Панель администратора: АСР-> Персонализация-> Управление расширениями 
4. Включите расширение "Quick Language"

## Удаление
1. Перейти в Панель администратора: АСР-> Персонализация-> Управление расширениями 
2. Нажать на ссылку "отключить" в строке "Quick Language".
3. Для полного удаления, нажать "Удалить данные", затем физически удалить папку "quicklanguage" из "/ext/alg/".

### Лицензия
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)

П.с. Иконки флагов должны быть картинками 16Х16 пикселей типа ".png" и располагаться в папке /ext/alg/quicklanguage/styles/all/theme/images/flags 
полный список всех флагов можно скачать с сайта http://www.gosquared.com/download/pixels/flags.zip




© 2014 - Alg
