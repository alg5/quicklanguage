quicklanguage
=============
[![Build Status](https://travis-ci.org/alg5/quicklanguage.svg?branch=master)](https://travis-ci.org/alg5/quicklanguage)

Extension for phpBB 3.1 to let visitors quickly switch board language.


## Features
- Adds an icons for each installed language to the header, detects a selection change and triggers a board language change as through the UCP.
- Automatically redirects back to the original page being viewed after language has changed.
- Works for guests too, but uses a special cookie instead.
- ACP module to set guest access and show icon for English`

##Hidden features ("Easter Egg")
Admin, for those names of categories / forums that he wants to see in different languages, adds to its language file follow lines

FORUM_NAME_N, где N - ID of the forum/category
FORUM_DESC_N, где N - ID of the forum/category

Extension checks if the appropriate language variable, if there is, it will display as the title, if not, the name will remain the standard, as was recorded in the database (the same applies to the description of the forum / category)

#### Requirements
- phpBB 3.1-RC3 or higher
- PHP 5.3.3 or higher

#### Languages supported
- Chinese
- Сzech
- Deutsch
- English
- French
- Russian
- Ukrainian

#### To do list
-  responsive layout.
- check user data and return error message to user

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

## Скрытые возможности  ("пасхальное яйцо") расширения
Админ, для тех названий категорий/форумов, которые он хочет видеть на разных языках, добавляет в свой языковой файл строки по принципу

FORUM_NAME_N, где N - айди форума/категории
FORUM_DESC_N, где N - айди форума/категории

Расширение проверит, есть ли соответствующая языковая переменная, если есть, то выведет её в качестве названия, если нет, название останется стандартным, как было записано в базе( то же самое относится и к описанию форума/категории)


#### Требования
- phpBB 3.1-RC3 или выше
- PHP 5.3.3 или выше

#### Поддерживаемые языки
- Английский
- Китайский
- Немецкий
- Русский
- Украинский
- Французский
- Чешский

#### To do список( планируется)
-  аддаптивный дизайн
- Проверка данных пользователя и возвращение пользователю индикации об ошибке

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
