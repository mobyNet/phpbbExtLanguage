<?php
/**
*
* @package phpBB Extension - Security Code
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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

$lang = array_merge($lang, [
	'SECURITYCODE_ALLOW'						=> 'Enable Security Code',
	'SECURITYCODE_ALLOW_EXPLAIN'				=> 'Switch Security Code on for registration.',
	'SECURITYCODE_MESSAGE'						=> 'Show message',
	'SECURITYCODE_MESSAGE_EXPLAIN'				=> 'Enter the message you want display on registration page.',
	'SECURITYCODE_VALUE'						=> 'Characters of code',
	'SECURITYCODE_VALUE_EXPLAIN'				=> 'Set value of characters of Security Code.<br />Minimum is 6 and maximal is 40 characters.',
	'SECURITYCODE_SAVED'						=> 'Security Code settings saved.',
	'SECURITYCODE_LICENSE' 						=> 'License invalid',
	'SECURITYCODE_FILE_EXT'						=> 'Set file to activate the Security Code extension',
	'SECURITYCODE_FILE_EXT_EXPLAIN'				=> '<span style="color:#BF0000;"><strong>Request an active .json file name and set it here.</strong></span><br>
	You can make a key at <a href="https://www.dmzx-web.net/keyinput">dmzx</a>.<br> Example: example.json (including .json)',
	'SECURITYCODE_FILE_EXT_SET'					=> '<span style="color:#00BF00;">Security Code .json file is activated.</span>',
	'SECURITYCODE_INFO_FILE'					=> 'Activation information',
	'SECURITYCODE_INFO_FILE_EXPLAIN'			=> 'Make your key <a href="https://www.dmzx-web.net/keyinput"> >> Here << </a>',
	'SECURITYCODE_EMPTY_FIELD'					=> 'Field cannot be empty.',
	'SECURITYCODE_NO_JSON'						=> 'Key must have .json at the end.',
]);
