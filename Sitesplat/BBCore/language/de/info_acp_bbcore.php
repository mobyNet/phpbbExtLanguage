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
'ACP_SITESPLAT_UPDATE_MANAGER'          => 'SiteSplat Update Manager',
'VERSION_INSTALLED'                     => 'Installierte Version',
'NEW_BOOTS_VERSION'                     => 'Neue %s Version ist verfügbar',
'VERSIONNUMBERS'                        => 'Installierte Version: %s, lade dir die neue Version vom Server herunter: <a style="color:#fff;" href="%s" title="Download" target="_blank">%s</a>',
'SS_RAPID_DISABLE'                      => 'Schnell-Deaktivierung',
'SS_RAPID_DISABLE_TLT'                  => 'Deaktiviert (alle) SiteSplat Erweiterungen auf einmal. Mache vorher ein Backup!!!',
'DOWNLOAD_MSG'                          => 'Die aktuelle Version <span class="label label-success">%s</span> kann auf Themeforest heruntergeladen werden: <a href="%s" title="Download" target="_blank">%s - phpBB3</a>',
'CHANGE_LOG_MSG'                        => 'Den Changelog findest du hier: <a href="%s" target="_blank">%s (phpBB3.1) Changelog</a>',
'SUPPORT_FORUM_MSG'                     => 'Das Support-Forum ist auf der aktuellen Seite der Community: <a href="%s" title="Download" target="_blank">http://www.sitesplat.com</a>',
'COLORIZE_MSG'                          => 'Den Colorize Service findest du hier: <a href="http://www.sitesplat.com/phpBB3/themer.php" target="_blank">Colorize</a> (Stelle sicher, dass du angemeldet bist)',
'NO_VERSIONINFO'                        => 'Aktuell kann keine Version abgerufen werden, versuche es in ein paar Minuten erneut!',
'LOG_FILES_CHANGED'                     => '<strong>BBcore hat die folgenden %s Dateien für dich geändert:</strong><br />» %s',
'LOG_THEME_INSTALLED'                   => '<strong>BBcore wurde erfolgreich installiert</strong>',
'LOG_FILES_CHANGED_FAILED'              => '<strong>BBcore wurde nicht erfolgreich installiert</strong><br />» Einige Funktionen funktionieren vielleicht nicht!',
'LOG_THEME_UNINSTALLED'                 => '<strong>BBcore wurde erfolgreich deinstalliert</strong>',
'LOG_FILE_NOT_REPLACED'                 => '<strong>BBcore konnte die Originaldatei nicht für dich ersetzen:</strong><br />» %s',
'LOG_FILE_NOT_UPDATED'                  => '<strong>BBcore konnte folgende %s Dateien nicht für dich aktualisieren:</strong><br />» %s',
'LOG_BBCORE_INSTALLED'                  => '<strong>Sitesplat BBCore wurde erfolgreich installiert</strong>',
'LOG_BBCORE_DEINSTALLED'                => '<strong>Sitesplat BBCore wurde erfolgreich deinstalliert</strong>',
'LOG_BBCORE_NOT_REPLACED'               => '<strong>Sitesplat BBCore wurde nicht korrekt deinstalliert</strong><br />Folgende Datei(en) konnte(n) nicht ersetzt werden<br />» %s',
'LOG_BBCORE_NOT_UPDATED'                => '<strong>Sitesplat BBCore wurde nicht korrekt installiert</strong><br />Folgende Datei(en) konnte(n) nicht aktualisiert werden<br />» %s',
'ACP_BBCORE_MSG_FILES_FAIL'             => 'NICHT alle Dateien wurden bearbeitet! Bitte ersetze manuell die erwähnten Dateien im Admin-Log den du im Wartungs-Tab findest.',
'ACP_BBCORE_MSG_SETTINGS'               => 'Es gibt keine Konfigurationseinstellungen für diese Erweiterung.<br />Es wurden aufgrund von fehlenden Dateien oder Rechten nicht alle Aktualisierungen implementiert. <br />Schaue in den Admin-Log für weitere Informationen.<br /><br />Bitte ändere die Dateirechte manuell.',
'BBCORE_ERROR_DISABLE'                  => 'Du kannst SiteSplat BBCore nicht deaktivieren, da du andere SiteSplat\'s Erweiterungen aktiviert hast.<br />Deaktiviere zuerst alle SiteSplat-Erweiterungen. (Du kannst die Schnell-Deaktivierung benutzen um alle SiteSplat-Erweiterungen auf einmal zu deaktiveren.)<br /><br /><div style="margin: 0px auto; width: 50%%;"><strong>» %s</strong></div>',
// Emoji stuff
'SS_DEFAULT_EMOJI'                      => 'Standard Emoji',
'SS_DEFAULT_EMOJI_EXPLAIN'              => 'Aktivieren oder deaktivieren Sie das standardmäßige Emoji-Verhalten für phpBB-Thementitel. Leider können Benutzer ab phpBB 3.2.9 Emojis in Thementiteln frei „spammen“. Das phpBB-Team hat beschlossen, dies blind zuzulassen und Administratoren keine Möglichkeit zu bieten, es zu kontrollieren (nicht cool!). Glücklicherweise verwenden Sie den BBCore von SiteSplat für zusätzliche Funktionalität zu phpBB :-). Es wird dringend empfohlen, diese Option aktiviert zu lassen, um zu verhindern, dass Benutzer Titel spammen.<br>Verwenden Sie dann: <strong><a href="https://sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=29" target ="_blank">BBemoji</a></strong> (eine Premium-Erweiterung) stattdessen, wenn Sie noch einen Schritt weiter gehen und über eine entsprechende Forum-Berechtigungsbasis die vollständige Kontrolle über dieses Verhalten haben möchten. Auf diese Weise können Sie ein bestimmtes Forum festlegen, in dem Emojis in Thementiteln gepostet werden dürfen.',
));