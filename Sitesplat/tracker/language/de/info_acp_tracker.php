<?php
/**
 *
 * Tracker (FLATBOOTS STYLE ONLY).
 *
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

//tracker
$lang = array_merge($lang, array(
'ACP_TRACKER'                                        => 'phpBB Tracker',
'ACP_TRACKER_ATTACHMENTS'                            => 'Anh&auml;nge verwalten',
'ACP_TRACKER_ATTACHMENTS_DELETE_CONFIRM'             => 'M&ouml;chten Sie die ausgew&auml;hlten Anh&auml;nge wirklich l&ouml;schen?',
'ACP_TRACKER_ATTACHMENTS_EXPLAIN'                    => 'Die verwaiste Anh&auml;nge und Anh&auml;nge im Upload-Ordner anzeigen, die sich nicht in der Datenbank befinden.',
'ACP_TRACKER_COMPONENT'                              => 'Komponenten verwalten',
'ACP_TRACKER_COMPONENT_ADD'                          => 'Neue Komponente hinzuf&uuml;gen',
'ACP_TRACKER_COMPONENT_ADDED'                        => 'Komponente erfolgreich hinzugef&uuml;gt.',
'ACP_TRACKER_COMPONENT_DELETE'                       => 'Komponente l&ouml;schen',
'ACP_TRACKER_COMPONENT_DELETED'                      => 'Komponente erfolgreich gel&ouml;scht.',
'ACP_TRACKER_COMPONENT_DELETE_CONFIRM'               => 'M&ouml;chten Sie diese Komponente wirklich aus dem ausgew&auml;hlten Projekt im Tracker l&ouml;schen?',
'ACP_TRACKER_COMPONENT_EDITED'                       => 'Komponente erfolgreich bearbeitet.',
'ACP_TRACKER_COMPONENT_EXPLAIN'                      => 'Hinzuf&uuml;gen, L&ouml;schen und Bearbeiten von Komponenten f&uuml;r ein Projekt im Tracker.',
'ACP_TRACKER_COMPONENT_NO_ID'                        => 'Die ausgew&auml;hlte Komponente ist in der Datenbank nicht vorhanden.',
'ACP_TRACKER_DELETE_MARKED'                          => 'Markierte l&ouml;schen',
'ACP_TRACKER_NO_PROJECT_CAT_CREATED'                 => 'Sie m&uuml;ssen eine Projektkategorie erstellen, bevor Sie Projekte hinzuf&uuml;gen k&ouml;nnen.',
'ACP_TRACKER_PROJECT'                                => 'Projekte verwalten',
'ACP_TRACKER_PROJECT_ADD'                            => 'Neues Projekt hinzuf&uuml;gen',
'ACP_TRACKER_PROJECT_ADDED'                          => 'Projekt erfolgreich hinzugef&uuml;gt.',
'ACP_TRACKER_PROJECT_CAT_ADD'                        => 'Projektkategorie hinzuf&uuml;gen',
'ACP_TRACKER_PROJECT_CAT_ADDED'                      => 'Projektkategorie erfolgreich hinzugef&uuml;gt.',
'ACP_TRACKER_PROJECT_CAT_DELETE'                     => 'Projektkategorie l&ouml;schen',
'ACP_TRACKER_PROJECT_CAT_DELETED'                    => 'Projektkategorie erfolgreich gel&ouml;scht.',
'ACP_TRACKER_PROJECT_CAT_DELETE_CONFIRM'             => 'M&ouml;chten Sie die ausgew&auml;hlte Projektkategorie wirklich aus dem Tracker l&ouml;schen? Dadurch werden alle dieser Kategorie zugeordneten Informationen gel&ouml;scht. Dies schlie&szlig;t alle Projekte, Tickets, Posts und Anh&auml;nge in dieser Kategorie ein.',
'ACP_TRACKER_PROJECT_CAT_EDITED'                     => 'Projekt erfolgreich bearbeitet.',
'ACP_TRACKER_PROJECT_CAT_NO_ID'                      => 'Die ausgew&auml;hlte Projektkategorie existiert nicht in der Datenbank.',
'ACP_TRACKER_PROJECT_DELETE'                         => 'Projekt l&ouml;schen',
'ACP_TRACKER_PROJECT_DELETED'                        => 'Projekt erfolgreich gel&ouml;scht.',
'ACP_TRACKER_PROJECT_DELETE_CONFIRM'                 => 'M&ouml;chten Sie das ausgew&auml;hlte Projekt wirklich aus dem Tracker l&ouml;schen? Dadurch werden alle mit diesem Projekt verbundenen Informationen gel&ouml;scht.',
'ACP_TRACKER_PROJECT_EDITED'                         => 'Projekt erfolgreich bearbeitet.',
'ACP_TRACKER_PROJECT_EXPLAIN'                        => 'Hinzuf&uuml;gen, L&ouml;schen und Bearbeiten von Projekten f&uuml;r den Tracker.',
'ACP_TRACKER_PROJECT_NO_ID'                          => 'Das ausgew&auml;hlte Projekt existiert nicht in der Datenbank.',
'ACP_TRACKER_SETTINGS'                               => 'Einstellungen verwalten',
'ACP_TRACKER_SETTINGS_EXPLAIN'                       => 'Kontrollieren Sie die Tracker-Einstellungen und suchen Sie nach Updates.',
'ACP_TRACKER_SETTINGS_GENERAL'                       => 'Allgemeine Einstellungen',
'ACP_TRACKER_VERSION'                                => 'Versionen verwalten',
'ACP_TRACKER_VERSION_ADD'                            => 'Neue Version hinzuf&uuml;gen',
'ACP_TRACKER_VERSION_ADDED'                          => 'Version erfolgreich hinzugef&uuml;gt.',
'ACP_TRACKER_VERSION_DELETE'                         => 'Version l&ouml;schen',
'ACP_TRACKER_VERSION_DELETED'                        => 'Version erfolgreich gel&ouml;scht.',
'ACP_TRACKER_VERSION_DELETE_CONFIRM'                 => 'M&ouml;chten Sie diese Version wirklich aus dem ausgew&auml;hlten Projekt im Tracker l&ouml;schen?',
'ACP_TRACKER_VERSION_EDITED'                         => 'Version erfolgreich bearbeitet.',
'ACP_TRACKER_VERSION_EXPLAIN'                        => 'Hinzuf&uuml;gen, L&ouml;schen und Bearbeiten von Versionen f&uuml;r ein Projekt im Tracker.',
'ACP_TRACKER_VERSION_INFO'                           => 'Version Information',
'ACP_TRACKER_VERSION_NO_ID'                          => 'Die ausgew&auml;hlte Version existiert nicht in der Datenbank.',

'LOG_TRACKER_COMPONENT_ADD'                          => '<strong>Neue Komponente zu einem Projekt im Tracker hinzugef&uuml;gt</strong><br />» %s',
'LOG_TRACKER_COMPONENT_DELETE'                       => '<strong>Gel&ouml;schte Projektkomponente</strong><br />» %s',
'LOG_TRACKER_COMPONENT_EDIT'                         => '<strong>Ge&auml;nderte Projektkomponente</strong><br />» %s',
'LOG_TRACKER_DELETE_EXTRA'                           => '<strong>Zus&auml;tzliche Datei aus dem Verzeichnis f&uuml;r Tracker-Anh&auml;nge entfernt</strong><br />» %s',
'LOG_TRACKER_DELETE_ORPHAN'                          => '<strong>Verwaiste-Anh&auml;nge vom Tracker entfernt</strong><br />» %s',
'LOG_TRACKER_PROJECT_ADD'                            => '<strong>Neues Projekt zum Tracker hinzugef&uuml;gt</strong><br />» %s',
'LOG_TRACKER_PROJECT_CAT_ADD'                        => '<strong>Neue Projektkategorie zum Tracker hinzugef&uuml;gt</strong><br />» %s',
'LOG_TRACKER_PROJECT_CAT_DELETE'                     => '<strong>Gel&ouml;schte Projektkategorie</strong><br />» %s',
'LOG_TRACKER_PROJECT_CAT_EDIT'                       => '<strong>Ge&auml;nderte Projektkategorie</strong><br />» %s',
'LOG_TRACKER_PROJECT_DELETE'                         => '<strong>Projekt gel&ouml;scht</strong><br />» %s',
'LOG_TRACKER_PROJECT_EDIT'                           => '<strong>Ge&auml;ndertes Projekt</strong><br />» %s',
'LOG_TRACKER_SETTINGS'                               => '<strong>Ver&auml;nderte Tracker-Einstellungen</strong>',
'LOG_TRACKER_VERSION_ADD'                            => '<strong>Neue Version zu einem Projekt im Tracker hinzugef&uuml;gt</strong><br />» %s',
'LOG_TRACKER_VERSION_DELETE'                         => '<strong>Gel&ouml;schte Projektversion</strong><br />» %s',
'LOG_TRACKER_VERSION_EDIT'                           => '<strong>Ge&auml;nderte Version des Projekts</strong><br />» %s',

'TRACKER_ATTACHMENT_ALLOW'                           => 'Anh&auml;nge erlauben',
'TRACKER_ATTACHMENT_ALLOW_EXPLAIN'                   => 'Benutzern erlauben, Anh&auml;nge in den Tickets und bei Antworten hochzuladen. Wenn aktiviert, kann dies mit Berechtigungen gesteuert werden.',
'TRACKER_ATTACHMENT_MAX'                             => 'Maximale Anh&auml;nge',
'TRACKER_ATTACHMENT_MAX_EXPLAIN'                     => 'Maximale Anzahl von Anh&auml;ngen pro Beitrag. Dies gilt nicht f&uuml;r Administratoren.',
'TRACKER_ATTACHMENT_PATH'                            => 'Pfad der Anh&auml;nge ',
'TRACKER_ATTACHMENT_PATH_EXPLAIN'                    => 'Pfad, in den die Anh&auml;nge f&uuml;r den Tracker hochgeladen werden.',
'TRACKER_CHECK_UPDATES'                              => 'Nach Updates suchen',
'TRACKER_COMPONENT_DELETE_ERROR'                     => 'Die ausgew&auml;hlte Komponente kann nicht gel&ouml;scht werden, da Tickets vorhanden sind, die auf diese Komponente verweisen. L&ouml;schen Sie zuerst alle Tickets, die sich auf diese Komponente beziehen.',
'TRACKER_COMPONENT_NAME_EXPLAIN'                     => 'Name der Komponente, die dem ausgew&auml;hlten Projekt zugeordnet werden soll. Verwenden Sie die Sprach Variablen, wenn der Name aus der Sprachdatei stammt. Die Variable muss sich in der Datei mods/tracker.php befinden.',
'TRACKER_COMPONENT_NO_NAME'                          => 'F&uuml;r diese Komponente wurde kein Name eingegeben. Sie m&uuml;ssen einen Namen eingeben.',
'TRACKER_DEFAULT_STATUS_TYPE'                        => 'Standard Status Art',
'TRACKER_DEFAULT_STATUS_TYPE_EXPLAIN'                => 'W&auml;hlen Sie den Status aus, den die Filter-Dropdown-Liste beim Anzeigen von Projekttickets standardm&auml;&szlig;ig verwendet.',
'TRACKER_TOPIC_TO_TICKET_ACTION'                     => 'Aktion "Thema als Ticket',
'TRACKER_TOPIC_TO_TICKET_ACTION_EXPLAIN'             => 'W&auml;hlen Sie aus, was mit dem Thema geschehen soll, mit dem das Ticket erstellt wird.',
'TRACKER_ERROR_REMOVING_FILE'                        => 'Fehler beim Entfernen der Datei %s, Pr&uuml;fen Sie, ob die Datei existiert und nicht schreibgesch&uuml;tzt ist.',
'TRACKER_ERROR_REMOVING_ORPHAN'                      => 'Fehler beim Entfernen der Datei %s (%s), Pr&uuml;fen Sie, ob die Datei existiert und nicht schreibgesch&uuml;tzt ist.',
'TRACKER_EXTRA_FILES'                                => 'Zus&auml;tzliche Dateien im Anh&auml;nge Verzeichni',
'TRACKER_FILENAME'                                   => 'Dateiname',
'TRACKER_FILESIZE'                                   => 'Dateigr&ouml;&szlig;e',
'TRACKER_FILES_DELETED'                              => 'Dateien und/oder verwaiste Anh&auml;nge erfolgreich entfernt',
'TRACKER_ORPHAN'                                     => 'Verwaiste Anh&auml;nge',
'TRACKER_POSTS_PER_PAGE'                             => 'Beitr&auml;ge pro Seite',
'TRACKER_POSTS_PER_PAGE_EXPLAIN'                     => 'Anzahl der Kommentare pro Seite im Ticket.',
'TRACKER_PROJECT_CAT_ID'                             => 'Projekt Name ausw&auml;hlen',
'TRACKER_PROJECT_CAT_ID_EXPLAIN'                     => 'W&auml;hlen Sie den Namen des Projekts, um auch dieses Projekt dem Tracker hinzuzuf&uuml;gen.',
'TRACKER_PROJECT_CAT_NO_NAME'                        => 'F&uuml;r diese Projektkategorie wurde kein Name eingegeben. Sie m&uuml;ssen einen Namen eingeben.',
'TRACKER_PROJECT_DESC'                               => 'Projekt Beschreibung',
'TRACKER_PROJECT_DESC_EXPLAIN'                       => 'Beschreibung des Projekts.',
'TRACKER_PROJECT_ENABLED'                            => 'Projekt aktiviert',
'TRACKER_PROJECT_ENABLED_EXPLAIN'                    => 'W&auml;hlen Sie aus, ob  Sie das Projekt aktivieren wollen.',
'TRACKER_PROJECT_GROUP'                              => 'Projekt Gruppe',
'TRACKER_PROJECT_GROUP_EXPLAIN'                      => 'W&auml;hlen Sie die Gruppe aus, die dieses Projekt verwaltet.',
'TRACKER_PROJECT_ID'                                 => 'Projekt ausw&auml;hlen',
'TRACKER_PROJECT_LANG_DBMS'                          => 'Sprachvariable der DBMS-Version',
'TRACKER_PROJECT_LANG_DBMS_EXPLAIN'                  => 'Standardm&auml;&szlig;ig ist dies TRACKER_TICKET_DBMS, um der Sprachdatei einen weiteren Wert hinzuzuf&uuml;gen. M&uuml;ssen Sie  5 Sprachzeichenfolge hinzuf&uuml;gen. Wenn Sie dies beispielsweise in NEW_LANG &auml;ndern, m&uuml;ssen Sie NEW_LANG, NEW_LANG_DETAIL, NEW_LANG_EXPLAIN, NEW_LANG_EXPLAIN_BAD, NEW_LANG_EXPLAIN_GOOD zur Sprachdatei hinzuf&uuml;gen.',
'TRACKER_PROJECT_LANG_PHP'                           => 'Sprachvariable der PHP-Version',
'TRACKER_PROJECT_LANG_PHP_EXPLAIN'                   => 'Standardm&auml;&szlig;ig ist dies TRACKER_TICKET_PHP, um der Sprachdatei einen weiteren Wert hinzuzuf&uuml;gen. Sie m&uuml;ssen 5 Sprachzeichenfolge hinzuf&uuml;gen. Wenn Sie dies beispielsweise in NEW_LANG &auml;ndern, m&uuml;ssen Sie NEW_LANG, NEW_LANG_DETAIL, NEW_LANG_EXPLAIN, NEW_LANG_EXPLAIN_BAD, NEW_LANG_EXPLAIN_GOOD zur Sprachdatei hinzuf&uuml;gen.',
'TRACKER_PROJECT_NAME_EXPLAIN'                       => 'Name der Projekt Kategorie.',
'TRACKER_PROJECT_NO_NAME'                            => 'F&uuml;r dieses Projekt wurde kein Name eingegeben. Sie m&uuml;ssen einen Namen eingeben.',
'TRACKER_PROJECT_SECURITY'                           => 'Projekt Sicherheit',
'TRACKER_PROJECT_SECURITY_EXPLAIN'                   => 'W&auml;hlen Sie diese Option, wenn alle Tickets in diesem Projekt nur Team Mitgliedern und dem Verfasser angezeigt werden sollen, der sie ver&ouml;ffentlicht hat.',
'TRACKER_PROJECT_SHOW_DBMS'                          => 'DBMS-Version im Projekt anzeigen',
'TRACKER_PROJECT_SHOW_DBMS_EXPLAIN'                  => 'Wenn diese Option aktiviert ist, k&ouml;nnen die Benutzer diese Informationen mit dem Ticket eingeben und im gesamten Tracker sehen.',
'TRACKER_PROJECT_SHOW_PHP'                           => 'PHP-Version im Projekt anzeigen',
'TRACKER_PROJECT_SHOW_PHP_EXPLAIN'                   => 'Wenn diese Option aktiviert ist, k&ouml;nnen die Benutzer diese Informationen mit dem Ticket eingeben und im gesamten Tracker sehen.',
'TRACKER_PROJECT_TYPE'                               => 'Projekt Typ',
'TRACKER_PROJECT_TYPE_EXPLAIN'                       => 'W&auml;hlen Sie den Trackertyp des Projekts.',
'TRACKER_SEND_EMAIL'                                 => 'E-Mail senden',
'TRACKER_SEND_EMAIL_EXPLAIN'                         => 'E-Mail f&uuml;r Benachrichtungen senden, wenn Kommentare auf ein Ticket erstellt werden oder wenn der Ticket Status oder der Benutzer Status ge&auml;ndert wird.',
'TRACKER_TICKETS_PER_PAGE'                           => 'Tickets pro Seite',
'TRACKER_TICKETS_PER_PAGE_EXPLAIN'                   => 'Anzahl der Tickets pro Seite, die im Projekt angezeigt werden.',
'TRACKER_TICKET_SECURITY'                            => 'Ticket Sicherheit',
'TRACKER_TICKET_SECURITY_EXPLAIN'                    => 'W&auml;hlen Sie diese Option, wenn ausgew&auml;hlte Tickets nur Team Mitglieder und dem Verfasser angezeigt werden sollen, der sie ver&ouml;ffentlicht hat. Die M&ouml;glichkeit, ein Sicherheitsticket anzugeben, wird durch die Berechtigungseinstellungen und die Mitglieder der Projektgruppe gesteuert.',
'TRACKER_TOP_REPORTERS'                              => 'Anzahl der Top-Reporter',
'TRACKER_TOP_REPORTERS_EXPLAIN'                      => 'Legt die Anzahl der Top-Reporter fest, die auf der Statistikseite angezeigt werden.',
'TRACKER_UPDATE_INSTRUCTIONS'                        => '

                                                        <h1>Ank&uuml;ndigung und Ver&ouml;ffentlichung</h1>
                                                        
                                                        <p>Bitte lesen Sie <a href="%1$s" title="%1$s"><strong>Ank&uuml;ndigung und Ver&ouml;ffentlichung f&uuml;r die neueste Version</strong></a> bevor Sie den Update-Vorgang fortsetzen k&ouml;nnen n&uuml;tzliche Informationen enthalten sein. Es enth&auml;lt auch vollst&auml;ndige Download-Links sowie das &Auml;nderungsprotokoll.</p>
                                                        
                                                        <br />
                                                        
                                                        <h1>So aktualisieren Sie Ihre Installation des phpBB Tracker</h1>
                                                        
                                                        <p>Downloaden Sie die neueste Version herunter. Laden Sie alle neuen Dateien hoch, die die alten &uuml;berschreiben.  </p>
                                                        
                                                        <ul style="margin-left: 20px; font-size: 1.1em;">
                                                        	<li>Laden Sie die neueste Version herunter.<br /><br /></li>
                                                        	<li>Entpacke das Archiv.<br /><br /></li>
                                                        	<li>Laden Sie die neue Version in Ihr phpBB-Stammverzeichnis hoch (in dem sich Ihre config.php-Datei befindet).<br /><br /></li>
                                                        	<li>Befolgen Sie die Modx-Aktualisierungsdateien im Contrib-Ordner und nehmen Sie die erforderlichen &Auml;nderungen vor.<br /><br /></li>
                                                        </ul>
                                                        
                                                        <p><strong><a href="%2$s" title="%2$s">Starten Sie jetzt den Update-Vorgang, indem Sie Ihren Browser auf den Tracker-Installationsordner verweisen.</a></strong><br />
                                                        <br />
                                                        W&auml;hlen Sie die Option zum Aktualisieren auf die neueste Version. Sie werden benachrichtigt, sobald die Aktualisierung abgeschlossen ist.
                                                        </p>',
'TRACKER_VERSION_CHECK'                              => 'phpBB Tracker Versionspr&uuml;fung',
'TRACKER_VERSION_CHECK_EXPLAIN'                      => '&Uuml;berpr&uuml;ft, ob die Version von phpBB Tracker, die Sie gerade ausf&uuml;hren, aktuell ist.',
'TRACKER_VERSION_DELETE_ERROR'                       => 'Die ausgew&auml;hlte Version kann nicht gel&ouml;scht werden, da Tickets existieren, die auf diese Version verweisen. L&ouml;schen Sie zuerst alle Tickets, die sich auf diese Version beziehen.',
'TRACKER_VERSION_ENABLED'                            => 'Version aktiviert',
'TRACKER_VERSION_EXPLAIN'                            => 'Aktuelle installierte Version des Trackers.',
'TRACKER_VERSION_NAME_EXPLAIN'                       => 'Name der Version, die dem ausgew&auml;hlten Projekt zugeordnet werden soll. Verwenden Sie die Sprach Variablen, wenn der Name aus der Sprachdatei stammt. Die Variable muss sich in der Datei mods/tracker.php befinden.',
'TRACKER_VERSION_NOT_UP_TO_DATE_ACP'                 => 'Ihre Version von phpBB Tracker ist nicht aktuell. <br /> Nachfolgend finden Sie einen Link zur Ank&uuml;ndigung der Ver&ouml;ffentlichung der neuesten Version sowie Anweisungen zur Durchf&uuml;hrung des Updates.',
'TRACKER_VERSION_NO_NAME'                            => 'F&uuml;r diese Version wurde kein Name eingegeben. Sie m&uuml;ssen einen Namen eingeben.',
'TRACKER_VERSION_UP_TO_DATE_ACP'                     => 'Ihre Installation ist aktuell. F&uuml;r Ihre Version von phpBB Tracker sind keine Updates verf&uuml;gbar. Sie m&uuml;ssen Ihre Installation nicht aktualisieren.',

'TRACKER_TOPIC_NOTING'                               => 'Nichts tun',
'TRACKER_TOPIC_LOCK'                                 => 'Thema sperren',
'TRACKER_TOPIC_SOFT_DELETE'                          => 'Thema vorl&auml;ufig l&ouml;schen',
'TRACKER_TOPIC_DELETE'                               => 'Thema l&ouml;schen',
));