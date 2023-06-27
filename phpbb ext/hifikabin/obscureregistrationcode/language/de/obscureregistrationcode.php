<?php
/**
 *
 * @package phpBB Extension - Obscure Contact Us
 * @copyright (c) 2015 - HiFiKabin
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

if (!defined('IN_PHPBB')) {
	exit;
}
if (empty($lang) || !is_array($lang)) {
	$lang = array();
}

$lang = array_merge($lang, array(
'OBSCUREREGISTRATIONCODE_CONFIG'                        => 'Obscure Registrierungscode',
'OBSCUREREGISTRATIONCODE_CONFIG_EXPLAIN'                => 'Legen Sie den Registrierungscode fest, der im integrierten phpBB Q&A CAPTCHA verwendet werden soll.<br />Er wird auf eine Weise angezeigt, die für SPAMbots schwer zugänglich, aber für Menschen leicht lesbar ist.<br />Bevor Sie fortfahren, MÜSSEN Sie lesen Lesen Sie die Anweisungen und FAQ in der Datei readme.txt, indem Sie diese befolgen',
'OBSCUREREGISTRATIONCODE_CONFIG_SET'                    => 'Konfiguation',
'OBSCUREREGISTRATIONCODE_CONFIG_SAVED'                  => 'Obscure Registrierungscode-Einstellungen gespeichert',

'RANDOMGENERATOR'                                       => 'Zufall Code generator',
'CREATE'                                                => 'Neuen Code erstellen',
'COPY'                                                  => 'Kopie in zwischenspeicher',

'OBSCUREREGISTRATIONCODE'                               => 'Registrierungscode',
'OBSCUREREGISTRATIONCODE_EXPLAIN'                       => 'Geben Sie den Code ein, den Sie oben erstellt haben.<br />Denken Sie daran, diesen Code zu den Q&A-CAPTCHA-Einstellungen hinzuzufügen.',

'OBSCUREREGISTRATIONCODE_DIV'                           => 'Zusätzliche erste Ebene der SPAMbot-Resistenz',
'OBSCUREREGISTRATIONCODE_ORC'                           => 'Zusätzliche zweite Ebene der SPAMbot-Resistenz',
'OBSCUREREGISTRATIONCODE_CODE_EXPLAIN'                  => 'Ich empfehle Ihnen, dieses Feld zu ändern, um die SPAMbot-Resistenz dieser Erweiterung zu erhöhen.',
'OBSCUREREGISTRATIONCODE_CODE_LETTERS'                  => 'Keine Zahlen, Leerzeichen oder Sonderzeichen.',

'OBSCUREREGISTRATIONCODE_BG_ON'                         => 'Hindergrund f&uuml;r  den Registrierungscode',
'OBSCUREREGISTRATIONCODE_BG_ON_EXPLAIN'                 => 'Bei der Einstellung „NEIN“ müssen Sie möglicherweise die Standardschriftfarbe ändern',

'OBSCUREREGISTRATIONCODE_BG'                            => 'Hintergrundfarbe des Registrierungscodes',
'OBSCUREREGISTRATIONCODE_BG_EXPLAIN'                    => 'Wählen Sie die Hintergrundfarbe des Registrierungscodes aus',
'OBSCUREREGISTRATIONCODE_COLOUR'                        => 'Klicken Sie auf das Feld, um die Farbe auszuwählen',
'OBSCUREREGISTRATIONCODE_HASH'                          => '#',

'OBSCUREREGISTRATIONCODE_FONT'                          => 'Schriftfarbe des Registrierungscodes',
'OBSCUREREGISTRATIONCODE_FONT_EXPLAIN'                  => 'Wählen Sie die Schriftfarbe für den Registrierungscode aus',

'OBSCUREREGISTRATIONCODE_SIZE'                          => 'Schriftgröße des Registrierungscodes',
'OBSCUREREGISTRATIONCODE_SIZE_EXPLAIN'                  => 'Legen Sie die Schriftgröße des Registrierungscodes in Pixel fest',
));