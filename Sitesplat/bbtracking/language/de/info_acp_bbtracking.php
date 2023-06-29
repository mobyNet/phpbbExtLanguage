<?php
/**
*
* BBtracking
*
* @copyright (c) 2017, Sitesplat
* @license private
*/

if (!defined('IN_PHPBB')){
	exit;
}

if (empty($lang) || !is_array($lang)) {
	$lang = array();
}

$lang = array_merge($lang, array(
'ACP_BBTRACKING'                                   => 'BBtracking',
'ACP_BBTRACKING_EXPLAIN'                           => 'Hier können Sie zu verfolgende Benutzer (oder ganze Gruppen) hinzufügen. Benutzer oder Gruppen werden dann übergreifend verfolgt, wenn bestimmte Aktionen ausgelöst werden, die für das Verständnis des Benutzerverhaltens nützlich sein könnten. <br />',
'ACP_BBTRACKING_SETTINGS'                          => 'BBtracking-Einstellungen',
'ACP_BBTRACKING_LOGS'                              => 'BBtracking Logs',
'ACP_BBTRACKING_LOGS_EXPLAIN'                      => 'Die verfolgten Benutzer oder Gruppen sind unten zu sehen.',

'USER_UNTRACKED'                                   => 'Der Benutzer wurde aus dem Tracking genommen.',
'TRACKED_UPDATED'                                  => 'Die Tracking-Liste wurde aktualisiert.',

'ADD_USER'                                         => 'Benutzer hinzufügen',
'TRACKED_USERS'                                    => 'Verfolgte Benutzer',
'TRACKED_USERS_EXPLAIN'                            => 'Einzelne Benutzer zum Tracking  hinzufügen',
'TRACKED_GROUPS'                                   => 'Verfolgte Gruppen',
'TRACKED_GROUPS_EXPLAIN'                           => 'Wählen Sie eine bestimmte Gruppe f&uuml;r das Tracking aus',

'TRACKING_TYPE'                                    => 'Tracking typ',
'ALL'                                              => 'Alle',

'TRACKING_TYPE_ACCOUNT_SETTINGS'                   => '<b>Geänderte Kontoeinstellungen.</b><br/>" Neuer Benutzername: %s. Neue E-Mail: %s. Geänderter Benutzername: %s. Geänderte E-Mail: %s. Geändertes Passwort: %s.',
'TRACKING_TYPE_VIEWFORUM'                          => '<b>Forum Besucht: <a href="%s">Forum ID %d (start %d)</a>.</b>',
'TRACKING_TYPE_VIEWTOPIC'                          => '<b>Thema Besucht: <a href="%s">Thema ID %d (start %d)</a> in <a href="%s">Forum ID %d</a>.</b>',
'TRACKING_TYPE_MEMBERLIST_VIEWPROFILE'             => '<b>Profil Besucht <a href="%s">Benutzer ID %d`s Profil</a>.</b>',
'TRACKING_TYPE_EDIT_POST'                          => '<b>Bearbeitet <a href="%s">Beitrag ID %d</a>.</b>',
'TRACKING_TYPE_LOGIN'                              => '<b>Eingeloggt.</b>',
'TRACKING_TYPE_LOGOUT'                             => '<b>Ausgeloggt</b>',
'TRACKING_TYPE_SEND_PM'                            => '<b>Gesendete PM an Benutzer-IDs: %s.</b>',

'TRACKING_TYPE_ACCOUNT_SETTINGS_LABEL'             => 'Die Einstellungen des Accounts geändert',
'TRACKING_TYPE_VIEWFORUM_LABEL'                    => 'Besuch im Viewforum',
'TRACKING_TYPE_VIEWTOPIC_LABEL'                    => 'Besuch im Viewtopic',
'TRACKING_TYPE_MEMBERLIST_VIEWPROFILE_LABEL'       => 'Profilansicht des Mitglied',
'TRACKING_TYPE_EDIT_POST_LABEL'                    => 'Beitrag bearbeiten',
'TRACKING_TYPE_LOGIN_LABEL'                        => 'Anmelden',
'TRACKING_TYPE_LOGOUT_LABEL'                       => 'Abmelden',
'TRACKING_TYPE_SEND_PM_LABEL'                      => 'PM schicken',

'SS_HELPER_NOTY'                                   => 'SiteSplat BBcore existiert nicht!<br />Laden Sie das <a href="https://sitesplat.com" target="_blank">BBcore</a> herunter und kopieren Sie den BBcore-Ordner in Ihren Sitesplat-Erweiterungsordner.',
'BBTRACKING_NOTICE'                                => '<div class="phpinfo"><p>Die Einstellungen für diese Erweiterung finden Sie unter dem Reiter "EXTENSIONS".<br />Hinweis: Weitere Erweiterungsoptionen finden Sie unter: ACP > Foren: "Wählen Sie Ihr Forum" und klicken Sie auf das grüne Zahnradsymbol, um in den Bearbeitungsmodus zu gelangen. Schauen Sie sich dann "Beitragsrevisionen speichern" und "Automatische Korrekturen" an. <br/> Vergessen Sie auch nicht, die "Gruppenberechtigungen für das Forum" unter der Registerkarte "Aktionen" zu aktivieren.<br /> Schließlich können die Benutzer (die über die entsprechenden Berechtigungen verfügen) die Option "Beitragsüberarbeitung" in der Themenansicht unter dem Dropdown-Menü "Einzelner Beitrag" verwenden.</p></div>',

'ACP_PRIMEPOSTREVISIONS_ENABLE'                    => 'Beitrag der Revisionen speichern',
'ACP_PRIMEPOSTREVISIONS_ENABLE_EXPLAIN'            => 'Führen Sie einen Revision Verlauf aller Änderungen an den Beiträgen.',

'ACP_PRIMEPOSTREVISIONS_AUTOPRUNE'                 => 'Automatisch - Löschen der Revision ',
'ACP_PRIMEPOSTREVISIONS_AUTOPRUNE_EXPLAIN'         => 'Automatisches Löschen von Beitragsrevisionen, die älter als die angegebene Anzahl von Tagen sind. Zum Deaktivieren auf 0 setzen.',

'LOG_PRIMEPOSTREVISIONS_AUTOPRUNE'                 => '<strong>Automatisch gelöschte Beitragsrevisionen</strong><br />" Gelöschte Revisionen: %d',
));