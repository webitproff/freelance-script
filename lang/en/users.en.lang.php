<?php

/**
 * English Language File for the Users Module (users.en.lang.php)
 *
 * @package Cotonti
 * @version 0.7.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2009
 * @license BSD
 */

defined('SED_CODE') or die('Wrong URL.');

/**
 * User authentication
 */

 $L['aut_usernameoremail'] = 'Username or email';

/**
 * User registration
 */

$L['aut_contactadmin'] = 'If you have any difficulties please contact the board administrator';
$L['aut_emailalreadyindb'] = 'The e-mail you provided is already in the database';
$L['aut_emailbanned'] = 'This e-mail (or this host) is banned, reason is: ';
$L['aut_emailtooshort'] = 'The e-mail is not valid!';
$L['aut_invalidloginchars'] = 'The login contains invalid characters'; // New in 0.6.6
$L['aut_logintitle'] = 'Login form';
$L['aut_mailnoticetitle'] = 'E-mail transition';	// New in 0.1.0
$L['aut_passwordmismatch'] = 'The password fields do not match!';
$L['aut_passwordtooshort'] = 'The password must be at least 4 chars long and must consist of alphanumerical characters and underscore only.';
$L['aut_registersubtitle'] = '';
$L['aut_registertitle'] = 'Register a new member account';
$L['aut_regreqnoticetitle'] = 'New account request';
$L['aut_regrequesttitle'] = 'Registration request';
$L['aut_usernamealreadyindb'] = 'The user name you provided is already in the database';
$L['aut_usernametooshort']= 'The user name must be at least 2 chars long';

/**
 * User registration: messages
 */

$L['aut_regrequest'] = 'Hi %1$s,
Your account is currently inactive, an administrator will need to activate it before you can log in. You will receive another e-mail when this has occured. Then you will be able to login with:
Username = %1$s
Password = %2$s';

$L['aut_regreqnotice'] = 'You are receiving this e-mail because %1$s requested a new account.
This user won\'t be able to login until you manually set the account as \'active\', here:
%2$s';

$L['aut_emailreg'] = 'Hi %1$s,
To use your account you need to activate it with this link:
%3$s
Then you\'ll be able to login with:
Username = %1$s
Password = %2$s
To cancel the recently inactive membership use this link:
%4$s';

$L['aut_emailchange'] = 'Hi %1$s,
To change your recent e-mail please use this activation link:
%2$s';	// New in 0.1.0

/**
 * Users
 */

$L['pro_avatarnotvalid'] = 'This avatar is not a valid %1$s image.';	// New in 0.0.2
$L['pro_avatarschoose'] = 'Click an image below to set it as your own avatar';
$L['pro_avatarspreset'] = '...or click here to display a gallery of pre-loaded avatars';
$L['pro_avatarsupload'] = 'Upload an avatar';
$L['pro_avataruploadfailed'] = 'The upload failed, delete the old avatar before to free the slot!';
$L['pro_emailandpass'] = 'You can not change both e-mail and password at a time'; // New in 0.0.5
$L['pro_passdiffer'] = 'The 2 password fields do not match';
$L['pro_passtoshort'] = 'The password must be at least 4 chars long and must consist of alphanumerical characters and underscore only.';
$L['pro_photonotvalid'] = 'This photo is not a valid %1$s image.';	// New in 0.0.2
$L['pro_photoupload'] = 'Upload a photography';
$L['pro_sigotvalid'] = 'This signature is not a valid %1$s image.';	// New in 0.0.2
$L['pro_sigupload'] = 'Upload a signature';
$L['pro_subtitle'] = 'Your personal account';
$L['pro_title'] = 'Profile';
$L['pro_wrongpass'] = 'You didn\'t enter your present password, or it\'s wrong';

$L['useed_accountactivated'] = 'Account activated';
$L['useed_email'] = 'You are receiving this e-mail because an administrator activated your account. You may now login using the username and password you received in a previous e-mail.';
$L['useed_subtitle'] = '&nbsp;';
$L['useed_title'] = 'Edit';

$L['use_allbannedusers'] = 'Users banned';
$L['use_allinactiveusers'] = 'Users inactive';
$L['use_allusers'] = 'All users';
$L['use_byfirstletter'] = 'Name starting by';
$L['use_subtitle'] = 'Registered members';
$L['use_title'] = 'Users';

$L['pasrec_title'] = 'Password Recovery';
$L['pasrec_email1'] = 'You may now reset your password using the link below:'; // New in 0.0.2
$L['pasrec_email1b'] = 'Attention: if you did not request this password recovery email, for your information, requester IP is %1$s, and the request date and time is %2$s.'; // New in 0.1.0
$L['pasrec_email2'] = 'Your password has been reset as you requested. Please change it as soon as possible and delete this email. Your new password is';	// New in 0.0.2
$L['pasrec_explain1'] = 'Enter your email.';
$L['pasrec_explain2'] = 'You will receive an Email with an emergency link. Click it to reset your password.'; // N-0.0.2
$L['pasrec_explain3'] = 'Having confirmed twice your password reset request, you will receive random password generated by the system.'; // New in 0.0.2
$L['pasrec_explain4'] = 'If you cleared email field in your profile, you will not be able to recover your password. In this case please contact the webmaster by email.';
$L['pasrec_mailsent'] = 'Done, please check your mailbox in few minutes, and click the emergency link. Then follow instructions.';
$L['pasrec_mailsent2'] = 'Password reset. Please check your mailbox in few minutes to gather your new password.'; // New in 0.0.2
$L['pasrec_request'] = 'Request';
$L['pasrec_youremail'] = 'Your email: ';

?>