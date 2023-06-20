<?php
/**
 *
 * @package phpBB Extension - Add User
 * @author RMcGirr83  (Rich McGirr) rmcgirr83@rmcgirr83.org
 * @copyright (c) 2014 phpbbmodders.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB')) {
	exit;
}

/**
 * DO NOT CHANGE
 */
if (empty($lang) || !is_array($lang)) {
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

$lang = array_merge($lang, array(
// ACP Module
'ACP_ADD_USER'                         => 'Benutzer hinzufügen',
'DIR_NOT_EXIST'                        => 'Die von Ihnen gewählte Sprache %s enthält nicht die für die Erweiterung erforderlichen Dateien. Bitte übersetzen Sie sie und laden Sie sie in das %s Verzeichnis der Erweiterung hoch, um die Erweiterung zu verwenden.',
'ACP_ACCOUNT_ADDED'                    => 'Das Benutzerkonto wurde erstellt. Der Benutzer kann sich jetzt mit dem Benutzernamen und dem Kennwort anmelden, die an die von Ihnen angegebene E-Mail-Adresse gesendet wurden.',
'ACP_ACCOUNT_INACTIVE'                 => 'Das Benutzerkonto wurde erstellt. Für die Forumseinstellungen muss der Benutzer jedoch sein Konto aktivieren. <br /> Ein Aktivierungsschlüssel wurde an die E-Mail-Adresse gesendet, die Sie für den Benutzer angegeben haben.',
'ACP_ACCOUNT_INACTIVE_ADMIN'           => 'Das Konto wurde erstellt. Für die Forumseinstellungen ist jedoch eine Kontoaktivierung durch einen Administrator erforderlich. <br /> Eine E-Mail wurde an die Administratoren gesendet, und der Benutzer wird benachrichtigt, wenn sein Konto aktiviert wurde.',
'ACP_ADMIN_ACTIVATE'                   => 'Eine E-Mail wird an einen Administrator gesendet, um das Konto zu aktivieren. Alternativ können Sie das Kontrollkästchen unten aktivieren, um das Konto sofort nach der Erstellung zu aktivieren. Der Benutzer erhält eine E-Mail mit den Anmeldedaten des Kontos.',
'ACP_EMAIL_ACTIVATE'                   => 'Sobald das Konto erstellt wurde, erhält der Benutzer eine E-Mail mit einem Aktivierungslink zur Aktivierung des Kontos.',
'ACP_INSTANT_ACTIVATE'                 => 'Das Konto wird sofort aktiviert. Der Benutzer erhält eine E-Mail mit den Anmeldedaten des Kontos.',

'ADD_USER'                             => 'Benutzer hinzufügen',
'ADD_USER_EXPLAIN'                     => 'Erstellen Sie ein neues Benutzerkonto. Wenn Ihre Aktivierungseinstellungen nur für die Administratoraktivierung gelten, haben Sie die Möglichkeit, den Benutzer sofort zu aktivieren.',
'MOD_VERSION'                          => 'Version %s',
'ADMIN_ACTIVATE'                       => 'Benutzerkonto aktivieren',
'CONFIRM_PASSWORD'                     => 'Kennwort bestätigen',
'EDIT_USER_GROUPS'                     => '%sKlicken Sie hier, um die Benutzergruppen für diesen Benutzer zu bearbeiten%s',
'GROUP_ADD'                            => 'Wenn Sie hier eine Auswahl treffen, wird der Benutzer sowohl zur ausgewählten Gruppe als auch zur Gruppe der registrierten Benutzer hinzugefügt.',
'GROUP_DEFAULT_EXPLAIN'                => 'Durch Aktivieren dieses Kontrollkästchens wird die oben ausgewählte Gruppe als Standard für den Benutzer festgelegt.',
'CONTINUE_EDIT_USER'                   => '%1$sKlicken Sie hier, um  %2$s’s profil%3$s zu verwalten',
// e.g.: Klicken Sie hier, um Joes Profil zu bearbeiten.
'PASSWORD_EXPLAIN'                     => 'Wenn Sie dieses Feld leer lassen, wird automatisch ein Passwort generiert.',
'ENABLE_NEWUSER'                       => 'Neuen Benutzer aktivieren',
'ENABLE_NEWUSER_EXPLAIN'               => 'Bei Ja wird der Benutzer der neu registrierten Benutzergruppe hinzugefügt',
// ACP Logs
'LOG_USER_ADDED'                       => '<strong>Neuer Benutzer erstellt</strong><br />» %s',
));