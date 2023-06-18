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

$lang = array_merge($lang, array(
'TFA'                               => 'Zwei-Faktor-Authentifizierung',

'TFA_SETTING'                       => 'Einstellung der Zwei-Faktor-Authentifizierung',
'TFA_SETTING_EXPLAIN'               => 'Wählen Sie die Optionen für die Zwei-Faktor-Authentifizierung',

'TFA_DISABLED'                      => 'Zwei-Faktor-Authentifizierung deaktiviert',
'TFA_NOT_REQUIRED'                  => 'Keine Zwei-Faktor-Authentifizierung erforderlich',
'TFA_REQUIRED_FOR_ACP_LOGIN'        => 'Zwei-Faktor-Authentifizierung nur für die ACP-Anmeldung erforderlich',
'TFA_REQUIRED_FOR_ADMIN'            => 'Verlangt eine Zwei-Faktor-Authentifizierung für alle Administratoren',
'TFA_REQUIRED_FOR_MODERATOR'        => 'Verlangt eine Zwei-Faktor-Authentifizierung für alle Moderatoren und Administratoren',
'TFA_REQUIRED'                      => 'Verlangt eine Zwei-Faktor-Authentifizierung für alle Benutzer',

'TFA_NOTICE'                        => '<div class="phpinfo"><p>Die Einstellungen für diese Erweiterung befinden sich in <strong>%1$s » %2$s » %3$s</strong>.</p></div>',
'SS_HELPER_NOTY'                    => 'SiteSplat BBcore existiert nicht!<br />Download hier <a href="http://sitesplat.com" target="_blank">BBcore</a> und kopieren Sie den Ordner BBcore in Ihren Sitesplat-Erweiterungsordner.',
));