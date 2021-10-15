<?php
/**
*
* @package Two Factor Authentication
* @copyright (c) 2016 SiteSplat All rights reserved
* @license Proprietary
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
// ’ » “ ” …
//

$lang = array_merge(
	$lang, array(
		'TFA'							=> 'Two Factor Authentication',
		'TFA_REQUIRED_KEY_MISSING'      => 'The administrator of this forum requires that you have added a Two Factor Authentication key for access to (limited) parts of this forum, however you currently have no (Compatible) keys registerted to your account. You can add a new security key <a href="%s">here</a>.
												<br />For security reasons, the board has been disabled until you add a security key to your account. Your might be required to fill in your password while adding a security key!',
		// Controller
		'TFA_SOMETHING_WENT_WRONG'      => 'Something unexpected happened. Please try again later',
		'ERR_NO_MATCHING_REQUEST'       => 'No matching request found',
		'ERR_NO_MATCHING_REGISTRATION'  => 'No matching registration found',
		'ERR_AUTHENTICATION_FAILURE'    => 'Authentication failed',
		'ERR_UNMATCHED_CHALLENGE'       => 'Registration challenge does not match',
		'ERR_ATTESTATION_SIGNATURE'     => 'Attestation signature does not match',
		'ERR_ATTESTATION_VERIFICATION'  => 'Attestation certificate can not be validated',
		'ERR_BAD_RANDOM'                => 'Unable to obtain a good source of randomness',
		'ERR_COUNTER_TOO_LOW'           => 'Counter too low',
		'ERR_PUBKEY_DECODE'             => 'Decoding of public key failed',
		'ERR_BAD_UA_RETURNING'          => 'User-agent returned error',
		'ERR_OLD_OPENSSL'               => 'OpenSSL has to be at least version 1.0.0, this is %s',
		'UNKNOWN_ERROR'                 => 'A unknown error happened during the validation of your security key. Please try again later.',

		'ERR_TFA_NO_REQUEST_FOUND_IN_SESSION'	=> 'No request found in the current session. Did you submit via a different page?',
		'TFA_TFA_NOT_REGISTERED'				=> 'The used security key was not registered to your account',

		'TFA_NO_ACCESS'						=> 'It seems you have no access to this page?',
		'TFA_UNABLE_TO_UPDATE_SESSION'		=> 'Unable to update session. Please contact the board administrator',
		'TFA_DISABLED'						=> 'Two factor authentication has been disabled',

		'TFA_OTP_KEY_LOG'					=> 'Generated key here then hit submit',
		'TFA_OTP_KEY_LOG_EXPLAIN'			=> 'Enter the verification code generated by the Authenticator App from your phone in order to securely login into your account.',
		'TFA_INCORRECT_KEY'					=> 'Provided key was incorrect.',
		'TFA_NO_KEY_PROVIDED'				=> 'No key provided',
		'TFA_KEY_REQUIRED'					=> 'Please provide your security key',

		'TFA_OTP'					=> 'OTP',
	)
);