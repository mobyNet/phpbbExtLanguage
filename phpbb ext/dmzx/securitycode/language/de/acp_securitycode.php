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
	'SECURITYCODE_ALLOW'						=> 'Sicherheitscode aktivieren',
	'SECURITYCODE_ALLOW_EXPLAIN'				=> 'Schalten Sie den Sicherheitscode zur Registrierung ein.',
	'SECURITYCODE_MESSAGE'						=> 'Nachricht anzeigen',
	'SECURITYCODE_MESSAGE_EXPLAIN'				=> 'Geben Sie die Nachricht ein, die auf der Registrierungsseite angezeigt werden soll.',
	'SECURITYCODE_VALUE'						=> 'Zeichen des Codes',
	'SECURITYCODE_VALUE_EXPLAIN'				=> 'Stellen Sie den Wert der Zeichen des Sicherheitscodes ein. <br /> Minimum ist 6 und Maximum ist 40 Zeichen.',
	'SECURITYCODE_SAVED'						=> 'Sicherheitscode Einstellungen gespeichert.',
	'SECURITYCODE_LICENSE' 						=> 'Lizenz ungültig',
	'SECURITYCODE_FILE_EXT'						=> 'Aktivieren Sie die Sicherheitscode-Erweiterung',
	'SECURITYCODE_FILE_EXT_EXPLAIN'				=> '<span style="color:#BF0000;"><strong>Fordern Sie einen aktiven .json-Dateinamen an und kopieren Sie ihn hier rein.</strong></span><br>
	Sie können einen Schlüssel hier erstellen <a href="https://www.dmzx-web.net/keyinput">dmzx</a>.<br> Beispiel: beispiel.json ((PHP)including .json)',
	'SECURITYCODE_FILE_EXT_SET'					=> '<span style="color:#00BF00;">Sicherheitscode .json Datei ist aktiviert.</span>',
	'SECURITYCODE_INFO_FILE'					=> 'Aktivierung Informationen',
	'SECURITYCODE_INFO_FILE_EXPLAIN'			=> 'Einen Schl&uuml;ssel (.json) erastellen <a href="https://www.dmzx-web.net/keyinput"> >> Hier << </a>',
	'SECURITYCODE_EMPTY_FIELD'					=> 'Das Feld darf nicht leer sein.',
	'SECURITYCODE_NO_JSON'						=> 'Der Schlüssel muss mit .json enden.',
]);