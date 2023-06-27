<?php

/**
 *
 * @package PM Welcome
 * @copyright (c) 2015 Anvar
 * @copyright (c) 2020 RMcGirr83
 * @copyright (c) 2019-2022 Leinad4Mind
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

if (!defined('IN_PHPBB')) {
   exit;
}
if (empty($lang) || !is_array($lang)) {
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
// Some characters for use
// ’ » “ ” …


$lang = array_merge($lang, [
// General config options
'ACP_PMWELCOME'                             => 'Willkommensnachricht',
'ACP_PMWELCOME_EXPLAIN'                     => 'Sie können den Text der persönlichen Nachricht festlegen, die dem Benutzer bei der Registrierung zugesandt wird.',
'ACP_PMWELCOME_SETTINGS'                    => 'Einstellungen, private Nachricht willkommen',
'ACP_PMWELCOME_USER'                        => 'Absender',
'ACP_PMWELCOME_USER_EXPLAIN'                => 'Der Benutzer wird in dessen Namen die private Nachricht an das neue Mitglied senden.',
'ACP_PMWELCOME_SUBJECT'                     => 'Willkommen Betreff',
'ACP_PMWELCOME_SUBJECT_SHORT'               => 'Betreff',
'ACP_PMWELCOME_TEXT'                        => 'Text der Willkommensnachricht',
'ACP_PMWELCOME_TEXT_SHORT'                  => 'Text',
'ACP_PMWELCOME_TEXT_EXPLAIN'                => 'Sie können BBcode und Smilies sowie die folgenden Token verwenden: {USERNAME}, um den Namen des Benutzers zu ersetzen, der eine private Nachricht erhält; {USER_EMAIL}, um die E-Mail-Adresse des Benutzers zu ersetzen, der eine private Nachricht erhält; {SITE_NAME} und {SITE_DESC} zum Ersetzen durch den Namen und die Beschreibung Ihres Forums; {BOARD_CONTACT}, {BOARD_EMAIL} und {BOARD_SIG} ersetzen den Forumskontakt, die E-Mail-Adresse und die Signatur; Sowie {SENDER}, um den Namen des Absenders einzufügen.',
'ACP_PMWELCOME_PREVIEW'                     => 'PM Willkommen - Vorschau',
'ACP_PMWELCOME_NO_USER'                     => '<b>Der angeforderte Absender existiert nicht</b>',
'ACP_PMWELCOME_CONFIG_SAVED'                => 'PM-Willkommenskonfiguration wurde gespeichert',
'TOO_SHORT_PMWELCOME_SUBJECT'               => 'Die Zeichen für das Begrüßungsthema ist zu kurz',
'TOO_SHORT_PMWELCOME_POST_TEXT'             => 'Die Zeichen für den Begrüßungstext der privaten Nachricht ist zu kurz',
// Log entries
'LOG_CONFIG_PMWELCOME_ADMIN'                => '<strong>Einstellungen für die Willkommenserweiterungsseite für private Nachrichten geändert</strong>',
'LOG_PMWELCOME_CONFIG_UPDATE'               => '<strong>Aktualisierte konfiguration für private Nachrichten</strong>',
]);