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
		'TFA_REQUIRED_KEY_MISSING'      => 'Der Administrator dieses Forums verlangt, dass Sie einen Zwei-Faktor-Authentifizierungsschlüssel für den Zugang zu                                                 (begrenzten) Teilen dieses Forums hinzugefügt haben. Sie haben jedoch derzeit keine (kompatiblen) Schlüssel in Ihrem                                               Konto registriert. Sie können einen neuen Sicherheitsschlüssel <a href="%s">hier hinzufügen</a>.
										<br />Aus Sicherheitsgründen wurde das Forum deaktiviert, bis Sie einen Sicherheitsschlüssel zu Ihrem Konto hinzufügen.                                                Möglicherweise müssen Sie beim Hinzufügen eines Sicherheitsschlüssels Ihr Passwort eingeben!',
		// Controller
		'TFA_SOMETHING_WENT_WRONG'      => 'Es ist etwas Unerwartetes passiert. Bitte versuchen Sie es später noch einmal',
		'ERR_NO_MATCHING_REQUEST'       => 'Keine passende Anfrage gefunden',
		'ERR_NO_MATCHING_REGISTRATION'  => 'Keine passende Registrierung gefunden',
		'ERR_AUTHENTICATION_FAILURE'    => 'Authentifizierung fehlgeschlagen',
		'ERR_UNMATCHED_CHALLENGE'       => 'Registrierungsaufforderung stimmt nicht überein',
		'ERR_ATTESTATION_SIGNATURE'     => 'Die Signatur der Bescheinigung stimmt nicht überein',
		'ERR_ATTESTATION_VERIFICATION'  => 'Überprüfung des Zertifikat kann nicht validiert werden',
		'ERR_BAD_RANDOM'                => 'Es ist nicht möglich, eine gute Quelle des Zufalls zu erhalten',
		'ERR_COUNTER_TOO_LOW'           => 'Zähler zu niedrig',
		'ERR_PUBKEY_DECODE'             => 'Dekodierung des öffentlichen Schlüssels fehlgeschlagen',
		'ERR_BAD_UA_RETURNING'          => 'Benutzer-Agent gab Fehler zurück',
		'ERR_OLD_OPENSSL'               => 'OpenSSL muss mindestens Version 1.0.0 sein, dies ist %s',
		'UNKNOWN_ERROR'                 => 'Bei der Validierung Ihres Sicherheitsschlüssels ist ein unbekannter Fehler aufgetreten. Bitte versuchen Sie es später noch einmal.',

		'ERR_TFA_NO_REQUEST_FOUND_IN_SESSION'	=> 'Keine Anfrage in der aktuellen Sitzung gefunden. Haben Sie die Anfrage über eine andere Seite gestellt?',
		'TFA_TFA_NOT_REGISTERED'				=> 'Der verwendete Sicherheitsschlüssel wurde nicht in Ihrem Konto registriert',

		'TFA_NO_ACCESS'						=> 'Es scheint, dass Sie keinen Zugang zu dieser Seite haben?',
		'TFA_UNABLE_TO_UPDATE_SESSION'		=> 'Sitzung kann nicht aktualisiert werden. Bitte kontaktieren Sie die Board-Administration',
		'TFA_DISABLED'						=> 'Die Zwei-Faktor-Authentifizierung wurde deaktiviert',

		'TFA_OTP_KEY_LOG'					=> 'Erstellter Schlüssel hier, dann Absenden drücken',
		'TFA_OTP_KEY_LOG_EXPLAIN'			=> 'Geben Sie den von der Authenticator App generierten Verifizierungscode über Ihr Telefon ein, um sich sicher in Ihr Konto einzuloggen.',
		'TFA_INCORRECT_KEY'					=> 'Der angegebene Schlüssel war falsch.',
		'TFA_NO_KEY_PROVIDED'				=> 'Kein Schlüssel vorhanden',
		'TFA_KEY_REQUIRED'					=> 'Bitte geben Sie Ihren Sicherheitsschlüssel an',

		'TFA_OTP'					=> 'OTP',
	)
);