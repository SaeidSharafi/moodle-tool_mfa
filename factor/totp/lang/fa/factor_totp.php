<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Language strings.
 *
 * @package     factor_totp
 * @subpackage  tool_mfa
 * @author      Mikhail Golenkov <golenkovm@gmail.com>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['action:revoke'] = 'Revoke TOTP authenticator';
$string['devicename'] = 'نام دستگاه';
$string['devicenameexample'] = 'برای مثال "سامسونگ s21"';
$string['devicename_help'] = 'این نام دلخواه دستگاهی است که برنامه شناسایی دو عاملی بر روی آن نصب است. 
شما میتوانید چندین دستگاه را اضافه کنید، این نام کمک میکند دستگاه های خود را شناسایی کنید. 
شما باید هر دستگاه را با کد یکتای متفاوت فعال کنید تا بتوانید هر کدام را جداگانه غیرفعال نمایید.';
$string['error:wrongverification'] = 'کد تایید اشتباه است';
$string['error:codealreadyused'] = 'این کد قبلا جهت شناسایی استفاده شده است، لطفا صبر کنید تا کد جدید ایجاد شود، سپس مجددا تلاش کنید.';
$string['error:oldcode'] = 'این کد قدیمی است. لطفا بررسی کنید زمان دستگاه شما بروز باشد.
    زمان فعلی سرور {$a} می باشد.';
$string['error:futurecode'] = 'این کد غیر معتبر می‌باشد. لطفا بررسی کنید زمان دستگاه شما بروز باشد.
    زمان فعلی سرور {$a} می باشد.';
$string['info'] = '<p>جهت دانلود اپلیکیشن شناسایی دو عاملی گوگل بر روی لینک زیر کلیک کنید:</p>
<p><a href="https://itunes.apple.com/us/app/google-authenticator/id388497605?mt=8" target="_blank">iPhone</a> یا <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2" target="_blank">Android</a></p>';
$string['loginsubmit'] = 'کد تایید';
$string['loginskip'] = 'به دستگاه دسترسی ندارم';
$string['pluginname'] = 'اپلیکیشن احراز هویت';
$string['privacy:metadata'] = 'این پلاگین هیچ داده شخصی را نگهداری نمی‌کند';
$string['settings:secretlength'] = 'طول کلید مخفی TOTP';
$string['settings:secretlength_help'] = 'طول رشته کلید مخفی TOTP ایجاد شده ';
$string['settings:totplink'] = 'نمایش لینک فعال سازی با اپلیکیشن موبایل';
$string['settings:totplink_help'] = 'If enabled the user will see a 3rd setup option with a direct otpauth:// link';
$string['settings:window'] = 'TOTP پنجره تایید';
$string['settings:window_help'] = 'How long each code is valid for. You can set this to a higher value as a workaround if your users device clocks are often slightly wrong.
    Rounded down to the nearest 30 seconds, which is the time between new generated codes.';
$string['setupfactor'] = 'تنظیم شناسایی دو عاملی';
$string['setupfactor:account'] = 'حساب کاربری:';
$string['setupfactor:link'] = '<b> یا </b> باز کردن اپلیکیشن موبایل:';
$string['setupfactor:link_help'] = 'در صورتی که ای نصفحه را از طریق موبایل مشاهده میکنید و نرم افزار google authenticator را نصب کرده‌اید از این لینک استفاده کنید.';
$string['setupfactor:linklabel'] = 'باز کردن اپلیکیشنی که در این دستگاه از قبل نصب شده است';
$string['setupfactor:mode'] = 'حالت (mode):';
$string['setupfactor:mode:timebased'] = 'بر اساس زمان';
$string['setupfactor:scan'] = 'اسکن کد QR:';
$string['setupfactor:enter'] = '<b> یا </b> جزییات را دستی وارد کنید:';
$string['setupfactor:enter_help'] = 'در صورتی که میخواهید به صورت دستی کد را وارد کنید مطمین شوید نامی که در اپلیکیشن وارد می‌کنید بعدا قابل  تشیخص باشد، به عنوان مثال نام سایت. گزینه mode بر روی time-based باشد.';
$string['setupfactor:key'] = 'کلید مخفی (secret key): ';
$string['verificationcode'] = 'کد تایید ۶ رقمی خود را وارد نمایید.';
$string['verificationcode_help'] = 'برنامه Google Authenticator را باز کنید و کد ۶ رقمی که مربوط به این سایت هست را وارد نمایید';
$string['summarycondition'] = 'using a TOTP app';
$string['factorsetup'] = 'تنظیم شناسایی دو عاملی';
$string['systimeformat'] = '%l:%M:%S %P %Z';
