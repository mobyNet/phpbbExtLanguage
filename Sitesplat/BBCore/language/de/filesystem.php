<?php
/**
*
* @package sitesplat BBcore
* @copyright (c) 2020 SiteSplat All rights reserved
* @license Proprietary
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'SITESPLAT_SYSINFO'		=> 'System Information',
    'SS_SYSINFO'		    => 'System Information',
    'SS_FOUNDERS'		    => 'Inhaber',

	'BBCORE_BIG_INCORRECT'	=> 'FALSCH!',
	'PHP_OPEN_BASEDIR'		=> 'PHP open_basedir-Einschr�nkungen: <strong>%s</strong>',
	'PHP_EXT_MISSING'		=> 'PHP es fehlt die Erweiterung <strong>%s</strong>. ',
	'PHP_POSIX_MISSING'		=> 'Es ist nicht m�glich, Informationen zum file/system bereitzustellen, da PHP die Erweiterung <strong>POSIX</strong> fehlt. ',
	'PHP_FN_DISABLED'		=> 'Da Sie wichtige PHP-Kernfunktionen deaktiviert haben (<strong>%s</strong>), sind die von BBcore bereitgestellten Systeminformationen eingeschr�nkt und einige Erweiterungen/Addons haben eine eingeschr�nkte Funktionalit�t. Bitte denken Sie daran, diese Funktionen zu aktivieren! Ihre Systemkonfiguration wurde �berpr�ft und sie stellen kein Sicherheitsrisiko dar. ',
	'BBCORE_USEROWNER'		=> 'Inhaber des Verzeichnisses ext/sitesplat: <strong>moby2006</strong>',
	'BBCORE_PHPOWNER'		=> 'PHP l&auml;uft unter Benutzer: <strong>%s</strong>',

	'FS_BAD_WINDOWS'		=> 'Windows hat inkompatible ACL-Einschr�nkungen.',
	'FS_BAD_CGI'			=> 'PHP l�uft im CGI-Modus, kann aber aufgrund eines Konfigurationsfehlers nicht in das Dateisystem schreiben. Bitte beheben Sie den Fehler oder richten Sie die FTP-Konfiguration in den BBCore-Einstellungen ein.',
	'FS_BAD_CREDS'			=> 'FTP-Zugangsdaten fehlen oder sind falsch.',
	'FS_INCOMPATIBLE'		=> 'Ihr Server ist nicht mit BBcore Auto-Update und einer Reihe von SiteSplat-Erweiterungen kompatibel.',

	'FTP_SETTINGS'			=> 'FTP-Konfiguration',
	'FTP_HOST_EXPLAIN'		=> '<em><strong>Versuchen Sie, mit diesem leer gelassenen Feld eine Verbindung herzustellen.</strong></em> Wenn dies fehlschl�gt, verwenden Sie den von Ihrem Hosting-Unternehmen bereitgestellten FTP-Hostnamen. ',
	'FTP_PORT_EXPLAIN'		=> 'Die von Ihrem Hosting-Unternehmen bereitgestellte FTP-Portnummer. Wenn Sie dieses Feld leer lassen, wird die Portnummer auf 21 gesetzt. ',
	'FTP_SSL'				=> 'Verwenden Sie explizite TLS-Verschl�sselung',
	'FTP_SSL_EXPLAIN'		=> '<em><strong>Wenn das Feld FTP-Host leer ist, versuchen Sie bitte, eine Verbindung mit dieser Option auf NEIN zu setzen.</strong></em> Wenn dies fehlschl�gt, fragen Sie Ihr Hosting-Unternehmen nach der richtigen FTP-Verschl�sselungseinstellung. ',
	'FTP_USERNAME_EXPLAIN'	=> '<strong>(Erforderlich)</strong> Der Benutzername f�r den FTP-Zugriff auf Ihre phpBB-Dateien. Wenn Ihr Server dies unterst�tzt, erhalten Sie einen Vorschlag. ',

	'FTP_BAD_HOST'			=> 'Der von Ihnen eingegebene Hostname oder Port war ung�ltig oder die Verschl�sselungseinstellung war falsch',
	'FTP_BAD_USER'			=> 'Der von Ihnen eingegebene Benutzername oder das Passwort war ung�ltig',
	'FTP_NO_PATH'			=> 'Pfad zu phpBB kann nicht ermittelt werden',
	'FTP_BAD_PATH'			=> 'phpBB-Verzeichnis kann nicht ausgew�hlt werden',
	'FTP_FS_SUCCESS'		=> 'FTP-Zugriff auf Dateisystem war erfolgreich',

	'BBCORE_SETTINGS'		=> 'BBCore Einstellungen',
	'BBCORE_OPT_SAVED'		=> 'BBCoder Einstellungen wurden gespeichert.',

	// minification
	'SITESPLAT_BBCORE_MINIFY_HTML'			=> 'HTML minimieren',
	'SITESPLAT_BBCORE_MINIFY_HTML_EXPLAIN'	=> 'Dies ist eine BBcore-Option. Generierte Inhalte werden minimiert, bevor sie an den Benutzer gesendet werden. Dies reduziert den Netzwerkverkehr, erh�ht aber auch die CPU- und Speicherauslastung auf der Serverseite. ',

	// Emoji stuff
	'SS_DEFAULT_EMOJI'				=> 'Emoji-Verhalten bei Standardthementiteln',
	'SS_DEFAULT_EMOJI_EXPLAIN'		=> 'Aktivieren oder deaktivieren Sie das standardm&auml;&szlig;ige phpBB-Thementitel-Emoji-Verhalten. Leider k&ouml;nnen Benutzer ab phpBB 3.2.9 Emojis in Thementiteln frei "spamen". Das phpBB-Team hat beschlossen, dies blind zuzulassen und den Admins keine M&ouml;glichkeit zu bieten, es zu kontrollieren (nicht cool!). Gl&uuml;cklicherweise verwenden Sie den BBCore von SiteSplat, um phpBB zus&auml;tzliche Funktionen zu bieten :-). Es wird dringend empfohlen, diese Option aktiviert zu lassen, um zu verhindern, dass Benutzer Titel spammen.<br>Verwenden Sie dann: <strong><a href="https://sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=29" target ="_blank">BBemoji</a></strong> (eine Premium-Erweiterung) stattdessen, wenn Sie noch einen Schritt weiter gehen und die vollst&auml;ndige Kontrolle &uuml;ber die richtige Forenberechtigungsgrundlage f&uuml;r dieses Verhalten haben m&ouml;chten. Auf diese Weise k&ouml;nnen Sie ein bestimmtes Forum festlegen, um das Posten von Emojis in Thementiteln zuzulassen. ',
));
