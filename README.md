# phplib

A PHP utility library originally created by [mySociety](https://www.mysociety.org/) (UK Citizens Online Democracy), forked from https://github.com/mysociety/commonlib/tree/master/phplib.

This library is included as a dependency of [TWFY](../twfy/) (TheyWorkForYou / OpenAustralia) and provides shared functionality such as authentication, API communication (RABX), geographic lookups (MapIt, Gaze), and user tracking.

## Licence

The upstream mySociety commonlib repository is licensed under the **GNU Affero General Public License v3.0 or later** (AGPL-3.0-or-later), as stated in its [LICENSE.txt](https://github.com/mysociety/commonlib/blob/master/LICENSE.txt). The individual source files carry copyright notices for "UK Citizens Online Democracy" (2004–2006).

This fork's `composer.json` previously declared `BSD-3-Clause`, which appears to be incorrect — as a derivative work of AGPL-licensed code, this library should be AGPL-3.0-or-later.
