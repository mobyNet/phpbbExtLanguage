<?php
/**
 *
 * @package sitesplat BBcore
 * @copyright (c) 2020 SiteSplat All rights reserved
 * @license Proprietary
 *
 */

if (!defined('IN_PHPBB')) {
	exit;
}

if (empty($lang) || !is_array($lang)) {
	$lang = array();
}

$lang = array_merge($lang, array(
'SITESPLAT_SYSINFO'                        => 'System Information',

'BBCORE_BIG_INCORRECT'                     => 'FALSCH!',
'PHP_OPEN_BASEDIR'                         => 'Einschränkungen für PHP open_basedir: <strong>%s</strong>',
'PHP_EXT_MISSING'                          => 'PHP fehlt die Erweiterung <strong>%s</strong>.',
'PHP_POSIX_MISSING'                        => 'Es ist nicht möglich, Informationen zum Datei-/Systemeigentum bereitzustellen, da PHP die Erweiterung <strong>POSIX</strong> fehlt.',
'PHP_FN_DISABLED'                          => 'Da Sie wichtige PHP-Kernfunktionen (<strong>%s</strong>) deaktiviert haben, sind die von BBCore bereitgestellten Systeminformationen eingeschränkt und einige Erweiterungen/Add-Ons verfügen nur über eingeschränkte Funktionalität. Bitte erwägen Sie die Aktivierung dieser Funktionen! Ihre Systemkonfiguration wurde überprüft und es besteht kein Sicherheitsrisiko.',
'BBCORE_USEROWNER'                         => 'Besitzer von ext/sitesplat-Verzeichnisses: <strong>%s</strong>',
'BBCORE_PHPOWNER'                          => 'PHP wird als Benutzer ausgeführt: <strong>%s</strong>',

'FS_BAD_WINDOWS'                           => 'Fenster weist inkompatible ACL-Einschränkungen auf.',
'FS_BAD_CGI'                               => 'PHP läuft im CGI-Modus, kann aber aufgrund eines Konfigurationsfehlers nicht in das Dateisystem schreiben. Bitte beheben Sie den Fehler oder richten Sie die FTP-Konfiguration in den BBCore-Einstellungen ein.',
'FS_BAD_CREDS'                             => 'FTP-Anmeldeinformationen fehlen oder sind falsch.',
'FS_INCOMPATIBLE'                          => 'Ihr Server ist nicht mit der automatischen Aktualisierung von BBCore und einer Reihe von SiteSplat-Erweiterungen kompatibel.',

'FTP_SETTINGS'                             => 'FTP-Konfiguration',
'FTP_HOST_EXPLAIN'                         => '<em><strong>Bitte versuchen Sie, eine Verbindung herzustellen, während dieses Feld leer bleibt.</strong></em> Wenn dies fehlschlägt, verwenden Sie den von Ihrem Hosting-Unternehmen bereitgestellten FTP-Hostnamen.',
'FTP_PORT_EXPLAIN'                         => 'Die von Ihrem Hosting-Unternehmen bereitgestellte FTP-Portnummer. Wenn Sie dieses Feld leer lassen, wird die Portnummer auf 21 gesetzt.',
'FTP_SSL'                                  => 'Verwenden Sie explizite TLS-Verschlüsselung',
'FTP_SSL_EXPLAIN'                          => '<em><strong>Wenn das Feld „FTP-Host“ leer ist, versuchen Sie bitte, eine Verbindung mit dieser Option auf NEIN herzustellen.</strong></em> Wenn dies fehlschlägt, fragen Sie Ihr Hosting-Unternehmen nach der richtigen FTP-Verschlüsselungseinstellung.',
'FTP_USERNAME_EXPLAIN'                     => '<strong>(Erforderlich)</strong> Der Benutzername für den FTP-Zugriff auf Ihre phpBB-Dateien. Wenn Ihr Server dies unterstützt, wird ein Vorschlag bereitgestellt.',

'FTP_BAD_HOST'                             => 'Der von Ihnen eingegebene Hostname oder Port war ungültig oder die Verschlüsselungseinstellung war falsch',
'FTP_BAD_USER'                             => 'Der von Ihnen eingegebene Benutzername oder das Passwort war ungültig',
'FTP_NO_PATH'                              => 'Der Pfad zu phpBB kann nicht ermittelt werden',
'FTP_BAD_PATH'                             => 'Das phpBB-Verzeichnis kann nicht ausgewählt werden',
'FTP_FS_SUCCESS'                           => 'Der FTP-Zugriff auf das Dateisystem war erfolgreich',

'BBCORE_SETTINGS'                          => 'BBCore-Einstellungen',
'BBCORE_OPT_SAVED'                         => 'BBCore-Einstellungen wurden gespeichert.',

// minification
'SITESPLAT_BBCORE_MINIFY_HTML'             => 'HTML minimieren',
'SITESPLAT_BBCORE_MINIFY_HTML_EXPLAIN'     => 'Dies ist eine BBCore-Option. Generierte Inhalte werden minimiert, bevor sie an den Benutzer gesendet werden. Dadurch wird der Netzwerkverkehr reduziert, aber auch die CPU- und Speicherauslastung auf der Serverseite erhöht.',
  
// Emoji stuff
'SS_DEFAULT_EMOJI'                         => 'Standardmäßiges Emoji-Verhalten für Thementitel',
'SS_DEFAULT_EMOJI_EXPLAIN'                 => 'Aktivieren oder deaktivieren Sie das standardmäßige Emoji-Verhalten für phpBB-Thementitel. Leider können Benutzer ab phpBB 3.2.9 Emojis in Thementiteln frei „spammen“. Das phpBB-Team hat beschlossen, dies blind zuzulassen und Administratoren keine Möglichkeit zu bieten, es zu kontrollieren (nicht cool!). Glücklicherweise verwenden Sie den BBCore von SiteSplat für zusätzliche Funktionalität zu phpBB :-). Es wird dringend empfohlen, diese Option aktiviert zu lassen, um zu verhindern, dass Benutzer Titel spammen.<br>Verwenden Sie dann: <strong><a href="https://sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=29" target ="_blank">BBemoji</a></strong> (eine Premium-Erweiterung) stattdessen, wenn Sie noch einen Schritt weiter gehen und über eine entsprechende Forum-Berechtigungsbasis die vollständige Kontrolle über dieses Verhalten haben möchten. Auf diese Weise können Sie ein bestimmtes Forum festlegen, in dem Emojis in Thementiteln gepostet werden dürfen.',
));