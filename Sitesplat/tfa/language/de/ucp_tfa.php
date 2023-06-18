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
if (!defined('IN_PHPBB')) {
	exit;
}

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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang,array(
'TFA_NO_KEYS'                       => 'N\A',
'TFA_NO_KEY_FOUND'                  => 'Kein Zwei-Faktor-Authentifizierungsschlüssel gefunden. Laden Sie die Google Authenticator-App auf Ihr Mobilgerät herunter und verknüpfen Sie das Konto durch Eingabe eines neuen Schlüssels. <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en" target="blank"><i class="fa-android"></i> Android</a> &#47; <a href="https://itunes.apple.com/ca/app/google-authenticator/id388497605" target="blank"><i class="fa-apple"></i> Apple</a>',
'TFA_KEYS'                          => 'Auf dieser Seite können Sie Ihre Zwei-Faktor-Authentifizierungsschlüssel verwalten. Wenn Sie Ihre Schlüssel verlieren, stellen Sie sicher,                                        dass Sie den Schlüssel aus Ihrem Authenticator entfernen! Sie können Ihren Schlüssel mit der Funktion "Passwort vergessen" zurücksetzen,                                           dann können Sie sich erneut anmelden und einen neuen Schlüssel erstellen.',
'TFA_NO_MODE'                       => 'Kein Modus',
'TFA_KEYS_DELETED'                  => 'Ausgewählte Tasten entfernt.',
'TFA_NEW'                           => 'Neuen Schlüssel hinzufügen',
'TFA_ERROR'                         => 'Es scheint etwas schief gelaufen zu sein...',
'TFA_REG_FAILED'                    => 'Die Registrierung ist mit einem Fehler fehlgeschlagen: ',
'TFA_REG_EXISTS'                    => 'Der angegebene Schlüssel wurde bereits in Ihrem Konto registriert ',
'TFA_ADD_KEY'                       => 'Neuen Schlüssel registrieren',
'TFA_KEY_ADDED'                     => 'Ihr Sicherheitsschlüssel wurde hinzugefügt und kann verwendet werden.',
'TFA_INSERT_KEY'                    => 'Fügen Sie Ihren Sicherheitsschlüssel ein, und drücken Sie die Taste auf dem Schlüssel',
'TFA_REGISTERED'                    => 'Schlüssel registriert',
'TFA_LAST_USED'                     => 'Zuletzt verwendeter Schlüssel',
'TFA_LOGIN_FROM'                    => 'Letzte Anmeldung von',
'TFA_MODULE_NOT_FOUND'              => 'Das ausgewählte Modul (%s) wurde nicht gefunden',
'TFA_MODULE_NO_REGISTER'            => 'Das ausgewählte Modul akzeptiert keine neuen Schlüssel zur Registrierung',
'TFA_SELECT_NEW'                    => 'Neuen Schlüssel hinzufügen',
'TFA_ADD_NEW_OTP_KEY'               => 'Einen neuen OTP-Schlüssel zu Ihrem Konto hinzufügen',
'TFA_ADD_OTP_KEY_MAIN'              => 'Scannen Sie den unten stehenden QR-Code mit der Google Authenticator App für <a href="https://play.google.com/store/apps/details?id=com                                           .google.android.apps.authenticator2&hl=en" target="blank"><i class="fa-android"></i> Android</a> &#47; <a href="https://itunes.apple.com                                           /ca/app/google-authenticator/id388497605" target="blank"><i class="fa-apple"></i> Apple</a>, oder verwenden Sie den unten generierten                                             Schlüssel.<br /> Geben Sie anschließend den von Ihrer Authenticator App bereitgestellten Code ein, um Ihr Konto endgültig zu verknüpfen.',
'TFA_OTP_KEY'                       => 'Erstellter Schlüssel hier, dann Absenden drücken',
'TFA_ADD_OTP_KEY_EXPLAIN'           => '<span>%s</span>',
'TFA_OTP_INVALID_KEY'               => 'Ungültiger Schlüssel angegeben.',
'TFA_KEYTYPE'                       => 'Typ des Schlüssels',
'TFA_KEY_NOT_USED'                  => 'Noch nicht verwendet',
));