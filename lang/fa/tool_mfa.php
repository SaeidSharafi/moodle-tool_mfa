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
//
/**
 * Strings for component 'tool_mfa', language 'fa'.
 *
 * @package     tool_mfa
 * @author      Mikhail Golenkov <golenkovm@gmail.com>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Achieved weight';
$string['areyousure'] = 'ایا از حذف این عامل اطمینان دارید؟';
$string['combination'] = 'ترکیب';
$string['created'] = 'ایجاد شده';
$string['createdfromip'] = 'ایجاد شده از IP';
$string['debugmode:heading'] = 'حالت اشکال زدایی';
$string['debugmode:currentweight'] = 'وزن فعلی: {$a}';
$string['devicename'] = 'دستگاه';
$string['enablefactor'] = 'فعال‌سازی عامل';
$string['error:directaccess'] = 'اماکن دسترسی مستقیم به این صفحه نمی‌باشد';
$string['error:factornotfound'] = 'عامل شناسایی \'{$a}\' یافت نشد';
$string['error:wrongfactorid'] = 'شناسه عامل \'{$a}\' اشتابه است';
$string['error:actionnotfound'] = 'عملیات \'{$a}\' پشتیبانی نمی‌شود';
$string['error:setupfactor'] = 'عامل قابل تظنیم نمی باشد';
$string['error:revoke'] = 'امکان حذف عامل نمی‌باشد';
$string['error:notenoughfactors'] = 'انجام شناسایی غیرممکن می‌باشد';
$string['error:reauth'] = 'ما نتوانستیم هویت شما را به اندازه ای تایید کنیم که با خط مشی امنیتی احراز هویت سایت مطابقت داشته باشد.<br>
 این ممکن است به دلیل:
<br> ۱) مراحل قفل شده‌اند - لطفا چند دقیقه صبر کنید و دوباره امتحان کنید.
<br> ۲) انجام مراحل شکست خورده‌ است - لطفا در مرحله جزییا را دوباره بررسی نمایید.
<br> ۳) برخی مراحل لغو شده اند - لطفا این صفحه را مجددا بارگیری کنید و یا دوباره وارد سیستم شوید.';
$string['error:support'] = 'اگر هنوز قادر به ورود به سیستم نیستید یا فکر می‌:نید این را به اشتباه مشاهده می‌کنید، لطفا برای پشتیبانی به آدرس زیر ایمیل ارسال کنید:';
$string['error:home'] = 'برای بازگشت کلیک کنید';
$string['error:factornotenabled'] = 'عامل شناسایی \'{$a}\' فعال نیست';
$string['email:subject'] = 'ورد به {$a} امکان ندارد';
$string['event:userpassedmfa'] = 'تایید صحت انجام شد';
$string['event:userrevokedfactor'] = 'ابطال عامل';
$string['event:usersetupfactor'] = 'تنطیم عامل';
$string['event:userdeletedfactor'] = 'عامل حذف شد';
$string['event:userfailedmfa'] = 'احراز هویت MFA توسط کاربر انجام نشد';
$string['event:faillockout'] = 'احراز هویت MFA به دلیل تلاش های زیاد ناموفق بود.';
$string['event:failnotenoughfactors'] = 'احراز هویت MFA به دلیل کافی نبودن عوامل تایید شده ناموق بود';
$string['event:failfactor'] = 'احراز هویت MFA به دلیل یک عامل ناموفق انجام نشد.';
$string['factor'] = 'عامل';
$string['fallback'] = 'عامل جایگزین';
$string['fallback_info'] = 'اگر هیچ عامل دیگری پیکربندی نشده باشد ، این عامل جایگزین است. این عامل همیشه شکست می خورد.';
$string['gotourl'] = 'به آدرس اصلی خود بروید: ';
$string['inputrequired'] = 'ورودی کاربر';
$string['ipatcreation'] = 'آدرس IP هنگام ایجاد عامل';
$string['lastverified'] = 'آخرین تایید';
$string['lockedusersforfactor'] = 'کرابران قفل شده: {$a}';
$string['lockedusersforallfactors'] = 'کاربران قفل شده: تمامی عامل‌ها';
$string['mfa'] = 'MFA';
$string['mfasettings'] = 'مدیریت MFA';
$string['na'] = 'n/a';
$string['nologinusers'] = 'وارد نشده';
$string['nonauthusers'] = 'MFA در انتظار';
$string['overall'] = 'به طور کلی';
$string['pluginname'] = 'Multi-factor authentication';
$string['preferences:header'] = 'تنظیمات شناسایی دو عاملی';
$string['preferences:availablefactors'] = 'Available factors';
$string['preferences:activefactors'] = 'Active factors';
$string['privacy:metadata:tool_mfa'] = 'Data with configured MFA factors';
$string['privacy:metadata:tool_mfa:id'] = 'Record ID';
$string['privacy:metadata:tool_mfa:userid'] = 'The ID of the user that factor belongs to';
$string['privacy:metadata:tool_mfa:factor'] = 'Factor type';
$string['privacy:metadata:tool_mfa:secret'] = 'Any secret data for factor';
$string['privacy:metadata:tool_mfa:label'] = 'label for factor instance, eg device or email';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Time the factor instance was setup';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'IP that the factor was setup from';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Time factor was last modified';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Time user was last verified with this factor';
$string['privacy:metadata:tool_mfa_secrets'] = 'This database table stores temporary secrets for user authentication.';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'The user this secret is associated with.';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'The factor this secret is associated with.';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'The secret security code.';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'The sessionid this secret is associated with.';
$string['privacy:metadata:tool_mfa_auth'] =
        'This database table stores the last time a successful MFA auth was registered for a user id.';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'The user this timestamp is associated with.';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'Time user was last authenticated with';
$string['revoke'] = 'Revoke';
$string['revokefactor'] = 'Revoke factor';
$string['settings:enabled'] = 'MFA plugin enabled';
$string['settings:enabled_help'] = '';
$string['settings:combinations'] = 'Summary of good conditions for login';
$string['settings:general'] = 'General MFA settings';
$string['settings:debugmode'] = 'Enable debug mode';
$string['settings:debugmode_help'] = 'Debug mode will display a small notification banner on MFA admin pages, as well as the user preferences page
         with information on the currently enabled factors.';
$string['settings:duration'] = 'Secret validity duration';
$string['settings:duration_help'] = 'The duration that generated secrets are valid.';
$string['settings:enablefactor'] = 'Enable factor';
$string['settings:enablefactor_help'] = 'Check this control to allow the factor to be used for MFA authentication.';
$string['settings:lockout'] = 'Lockout threshold';
$string['settings:lockout_help'] =
        'Amount of attempts a user has at answering input factors before they are not permitted to login.';
$string['settings:redir_exclusions'] = 'Urls which should not redirect the MFA check';
$string['settings:redir_exclusions_help'] =
        'Each new line is a relative URL from the siteroot for which the MFA check will not redirect from eg. /admin/tool/securityquestions/set_responses.php';
$string['settings:weight'] = 'Factor weight';
$string['settings:weight_help'] = 'The weight of this factor if passed. A user needs at least 100 points to login.';
$string['setup'] = 'Setup';
$string['setuprequired'] = 'User setup';
$string['setupfactor'] = 'Setup factor';
$string['state:pass'] = 'Pass';
$string['state:fail'] = 'Fail';
$string['state:unknown'] = 'Unknown';
$string['state:neutral'] = 'Neutral';
$string['state:locked'] = 'Locked';
$string['totalweight'] = 'Total weight';
$string['weight'] = 'Weight';
$string['mfareports'] = 'MFA reports';
$string['factorreport'] = 'All factor report';
$string['lockoutnotification'] = 'You have {$a} verification attempts remaining for this factor.';
$string['mfa:mfaaccess'] = 'Interact with MFA';
$string['factorsetup'] = 'Factor \'{$a}\' successfully setup.';
$string['factorrevoked'] = 'Factor \'{$a}\' successfully revoked.';
$string['factorlocked'] = 'Factor \'{$a}\' has been locked due to exceeded failed attempts.';
$string['factorreset'] =
        'عامل شناسایی \'{$a->factor}\' شما توسط مدیر سایت بازنشانی شده است. لطفا مجددا این عامل را تنظیم کنید. {$a->url}';
$string['factorresetall'] =
        'تمامی عوامل شناسایی شما توسط مدیر سایت بازنشانی شده‌اند. لطفا مجددا آنها را تنظیم کنید. {$a}';
$string['preferenceslink'] = 'رفتن به ترجیحات کاربر';
$string['connector'] = 'AND';
$string['pending'] = 'Pending';
$string['performbulk'] = 'Bulk action';
$string['redirecterrordetected'] =
        'Unsupported redirect detected, script execution terminated. Redirection error occured between MFA and {$a}.';
$string['resetfactor'] = 'Reset user authentication factors';
$string['resetfactorconfirm'] = 'Are you sure you wish to reset this factor for {$a}?';
$string['resetuser'] = 'User:';
$string['resetsuccess'] = 'Factor \'{$a->factor}\' successfully reset for user \'{$a->username}\'.';
$string['resetsuccessbulk'] = 'Factor \'{$a}\' successfully reset for provided users.';
$string['selectfactor'] = 'Select factor to reset:';
$string['resetfactorplaceholder'] = 'Username or email';
$string['userempty'] = 'User cannot be empty.';
$string['resetconfirm'] = 'Reset user factor';
$string['usernotfound'] = 'Unable to locate user.';
$string['totalusers'] = 'Total users';
$string['usersauthedinperiod'] = 'Logged in';
$string['lookbackperiod'] = 'Showing MFA information from {$a} onwards.';
$string['alltime'] = 'All time';
$string['selectperiod'] = 'Select a lookback period for the report:';
$string['userlogs'] = 'User logs';
$string['verificationcode'] = 'جهت تایید کد تایید را وارد نمایید.';
$string['verificationcode_help'] = 'The verification code provided by the current authentication factor.';
$string['viewlockedusers'] = 'View locked users';
