<?php
/**
 *
 * common [German]
 *
 * @package language
 * @package sitesplat BBcore
 * @version $Id$
 * @copyright (c) 2015 SiteSplat All rights reserved
 * @license Proprietary
 *
 */

// TRANSLATORS PLEASE NOTE
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

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB')) {
	exit;
}
if (empty($lang) || !is_array($lang)) {
	$lang = array();
}
$lang = array_merge($lang, array(
'SS_AUTOUPDATE_DISABLED'                     => '<strong style="font-size:1.4em">Die automatische BBCore-Aktualisierung ist deaktiviert!</strong>',
'SS_BAD_FILESYSTEM'                          => 'Sie verwenden einen veralteten PHP-Handler, der Ihr Dateisystem für phpBB unschreibbar macht.<br>Bitte erwägen Sie die Installation eines modernen FastCGI-PHP-Handlers wie PHP-FPM.',
'SS_SYSINFO'                                 => 'System Information',
'SS_FOUNDERS'                                => 'Gründer',
'ACP_SITESPLAT_UPDATE_MANAGER'               => 'Sitesplat Update Manager',
'VERSIONNUMBERS'                             => 'Installierte Version: %s, laden Sie die neue Version vom Server herunter: <a style="color:#fff;" href="%s" title="Download" target="_blank">%s</a> oder gehen Sie zum <a href="%s">SiteSplat Update Manager</a>.',
'VERSION_INSTALLED'                          => 'Installierte Version',
'NEW_BOOTS_VERSION'                          => '🌟 Neue %s Version verfügbar 🌟',

'SS_RAPID_DISABLE'                           => 'Schnell-Deaktivierung',
'SS_RAPID_DISABLE_TLT'                       => 'Deaktiviert (alle) SiteSplat Erweiterungen auf einmal. Mache vorher ein Backup!!!',
'DOWNLOAD_MSG'                               => 'Die aktuelle Version <span class="label label-success">%s</span> kann auf Themeforest heruntergeladen werden: <a href="%s" title="Download" target="_blank">%s - phpBB3</a>',

'DOWNLOAD_BTN_ENVATO'                        => '<a class="btn btn-default sitesplat-bbcore-autoupdate" href="%s" title="Von Envato herunterladen" target="_blank">Envato-Element anzeigen</a>',
'DOWNLOAD_MSG_NO_UPD'                        => 'Alles gut! Sieht aus, als wärst du auf dem neuesten Stand! 👍💯',
'START_AUTO'                                 => 'Start Auto-update 🚀',

'CHANGE_LOG_MSG'                             => 'Den Changelog findest du hier: <a href="%s" target="_blank">%s (phpBB3.1) Changelog</a>',
'SUPPORT_FORUM_MSG'                          => 'Das Support-Forum ist auf der aktuellen Seite der Community: <a href="%s" title="Download" target="_blank">http://www.sitesplat.com</a>',
'COLORIZE_MSG'                               => 'Den Colorize Service findest du hier: <a href="http://www.sitesplat.com/phpBB3/themer.php" target="_blank">Colorize</a> (Stelle sicher, dass du angemeldet bist)',
'NO_VERSIONINFO'                             => 'Aktuell kann keine Version abgerufen werden, versuche es in ein paar Minuten erneut!',

'LOG_FILES_CHANGED'                          => '<strong>BBcore hat die folgenden %s Dateien für dich geändert:</strong><br />» %s',
'LOG_THEME_INSTALLED'                        => '<strong>BBcore wurde erfolgreich installiert</strong>',
'LOG_FILES_CHANGED_FAILED'                   => '<strong>BBcore wurde nicht erfolgreich installiert</strong><br />» Einige Funktionen funktionieren vielleicht nicht!',
'LOG_THEME_UNINSTALLED'                      => '<strong>BBcore wurde erfolgreich deinstalliert</strong>',

'LOG_FILE_NOT_REPLACED'                      => '<strong>BBcore konnte die Originaldatei nicht für dich ersetzen:</strong><br />» %s',
'LOG_FILE_NOT_UPDATED'                       => '<strong>BBcore konnte folgende %s Dateien nicht für dich aktualisieren:</strong><br />» %s',

'LOG_BBCORE_INSTALLED'                       => '<strong>Sitesplat BBCore wurde erfolgreich installiert</strong>',
'LOG_BBCORE_DEINSTALLED'                     => '<strong>Sitesplat BBCore wurde erfolgreich deinstalliert</strong>',

'LOG_BBCORE_NOT_REPLACED'                    => '<strong>Sitesplat BBCore wurde nicht korrekt deinstalliert</strong><br />Folgende Datei(en) konnte(n) nicht ersetzt werden<br />» %s',
'LOG_BBCORE_NOT_UPDATED'                     => '<strong>Sitesplat BBCore wurde nicht korrekt installiert</strong><br />Folgende Datei(en) konnte(n) nicht aktualisiert werden<br />» %s',

'ACP_BBCORE_MSG_FILES_FAIL'                  => 'NICHT alle Dateien wurden bearbeitet! Bitte ersetze manuell die erwähnten Dateien im Admin-Log den du im Wartungs-Tab findest.',
'ACP_BBCORE_MSG_SETTINGS'                    => 'Es gibt keine Konfigurationseinstellungen für diese Erweiterung.<br />Es wurden aufgrund von fehlenden Dateien oder Rechten nicht alle Aktualisierungen implementiert. <br />Schaue in den Admin-Log für weitere Informationen.<br /><br />Bitte ändere die Dateirechte manuell.',
'BBCORE_ERROR_DISABLE'                       => 'Du kannst SiteSplat BBCore nicht deaktivieren, da du andere SiteSplat\'s Erweiterungen aktiviert hast.<br />Deaktiviere zuerst alle SiteSplat-Erweiterungen. (Du kannst die Schnell-Deaktivierung benutzen um alle SiteSplat-Erweiterungen auf einmal zu deaktiveren.)<br /><br /><div style="margin: 0px auto; width: 50%%;"><strong>» %s</strong></div>',
// autoupdate
'AUTOUPDATE_CONFIRM'                         => 'Bestätigen',
'AUTOUPDATE_CONFIRM_CONFIRM'                 => 'Sind Sie sicher, dass Sie das Theme mit der automatischen Aktualisierung aktualisieren möchten?<br /><br /><strong>HINWEIS:</strong> Das Board wird deaktiviert und der Board-Cache wird nach dem Update automatisch für Sie geleert .<br /> Ein Protokoll der Änderungen wird auch im ACP-Admin-Protokoll gespeichert. <br /> Eine Sicherungskopie Ihres Stils (mit Zeitstempel) wird zu Ihrer Bequemlichkeit im phpBB-Root/store/-Ordner auf Ihrem Server gespeichert. <br />Stellen Sie sicher, dass Sie Ihren Browser-Cache nach dem Update leeren. Wenn Sie CloudFlare verwenden, stellen Sie sicher, dass Sie auch dort den Cache leeren und den Forum-Cache erneut über ACP löschen!!!',
'UPDATE_IN_PROGRESS'                         => 'Aktualisierung läuft. Schließen Sie diese Registerkarte nicht.',
'STYLE_NOT_DEFINED'                          => 'Sie haben keinen zu aktualisierenden Style definiert.',
'ALREADY_UP_TO_DATE'                         => 'Dein Style ist bereits aktuell.',
'NO_DIRECT_DOWNLOAD'                         => 'Ihr Style kann nicht automatisch aktualisiert werden, da der Autor des Stils nicht die erforderlichen Dateien bereitgestellt hat.',
'PROBLEM_DOWNLOADING_UPDATE'                 => 'Die Update-Dateien können derzeit nicht heruntergeladen werden. Bitte versuchen Sie es später noch einmal.',
'DOWNLOADED_FILE_CORRUPTED'                  => 'Die Update-Datei ist beschädigt.',
'MERGE_CONFLICTS'                            => 'OH nein! 😱 ¯\_(ツ)_/¯ Das System konnte Ihr Premium-Theme nicht automatisch aktualisieren. Die möglichen Gründe könnten darin liegen, dass Ihre Designdateien beschädigt sind oder benutzerdefinierte Änderungen enthalten, die durch die automatische Aktualisierung nicht automatisch behoben werden können. Um Ihnen in dieser Situation zu helfen, sehen Sie sich die generierten Konfliktdateien und/oder die darin enthaltenen Konflikte an, gespeichert unter:<br /><br /><strong>%s</strong>.',
'REQUIRED_FILE_MISSING'                      => 'In Ihrem Style fehlt eine erforderliche Datei: %s',
'NEW_FILE_ALREADY_EXISTS'                    => 'Eine hinzuzufügende Datei existiert bereits: %s',
'UPDATE_SUCCESS'                             => 'Yeehaw! Ihr Premium-Theme wurde erfolgreich aktualisiert 💯. Viel Spaß!<br />Vergessen Sie außerdem nicht, nach Aktualisierungen Ihrer SiteSplat Premium-Erweiterungen zu suchen.<br /><br /> Oh, wenn Sie jetzt wirklich in einer fantastischen Stimmung sind, da ich Ihnen das Leben leichter gemacht habe und schneller 😜 wie wäre es mit einem digitalen High 5? Wie zum Beispiel eine 5-Sterne-⭐⭐⭐⭐⭐-Bewertung auf Themeforest für dieses Premium-Theme mit super PRO-Funktionen? <br /><br />Bitte bitte? 😚 Hier ist der Link für dich: <a href="https://themeforest.net/downloads?ref=ThemeSplat" target="_blank">https://themeforest.net/downloads</a>',
'CURRENT_FILE'                               => 'Aktuelle Datei',
'DIFF_SEP_EXPLAIN'                           => 'Konflikt',
'NEW_FILE'                                   => 'Neue Datei',

// log
'LOG_STYLE_UPDATED'                          => '<strong>BBcore hat den %s-Syle automatisch aktualisiert</strong><br />Bearbeitet:<br />&emsp;%s<br /><br />Hinzugefügt:<br />&emsp;%s<br /> <br />Gelöscht:<br />&emsp;%s',
));