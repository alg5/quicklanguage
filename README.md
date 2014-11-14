quicklanguage
=============
[![Build Status](https://travis-ci.org/alg5/quicklanguage.svg?branch=master)](https://travis-ci.org/alg5/quicklanguage)

Extension for phpBB 3.1 to let visitors quickly switch board language.


## Features
- Adds an icons for each installed language to the header, which detects a selection change and triggers a board language change as through the UCP.
- Automatically redirects back to the original page being viewed after style has changed.
- Works for guests too, but uses a special cookie instead.
- ACP module to set guest access and show icon for English`

#### Requirements
- phpBB 3.1-RC3 or higher
- PHP 5.3.3 or higher

#### Languages supported
- English
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

 P.S. Icon for each language must  be picture 16X16 pixels with ext ".png" anв located in /ext/quicklanguage/styles/all/theme/images
Icons of flags can be downloaded from www.gosquared.com/download/pixels/flags.zip

© 2014 - Alg
