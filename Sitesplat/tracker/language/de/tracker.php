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


$lang = array_merge($lang, array(
	'ADDING_TRACKER_TICKET'						=> 'Ticket hinzuf&uuml;gen zu  %s - %s',

	'BUG_TRACKER'								=> 'Fehler tracker',

	'FEATURE_TRACKER'							=> 'Funktionen tracker',

	'ISSUE_TRACKER'								=> 'Aufgaben tracker',

	'NO_PERMISSION_TRACKER_EDIT'				=> 'Sie haben keine Berechtigung, Ihr Ticket/Beitrag im Tracker zu bearbeiten. Wenn Sie der Meinung sind, dass dies ein Fehler ist, wenden Sie sich an den Board-Administrator.',
	'NO_PERMISSION_TRACKER_POST'				=> 'Sie haben keine Berechtigung Tickets im Tracker zu erstellen . Wenn Sie der Meinung sind, dass dies ein Fehler ist, wenden Sie sich an den Board-Administrator.',
	'NO_PERMISSION_TRACKER_VIEW'				=> 'Sie haben keine Berechtigung, den Tracker zu benutzen. Wenn Sie der Meinung sind, dass dies ein Fehler ist, wenden Sie sich an den Board-Administrator.',
	'NO_URL_BUILDER'							=> 'F&uuml;r die Tracker-API wurde kein URL-Builder festgelegt.',

	'REPLYING_TRACKER_TICKET'					=> 'Antwort auf Ticket in %s - %s',

	'TRACKER'									=> 'Tracker',
	'MY_TICKETS'								=> 'Meine Tickets',
	'MY_ASSIGNED'								=> 'Meine zugewiesenen Tickets',
	'TRACKER_ADD_EXPLAIN'						=> 'Vielen Dank, dass Sie sich die Zeit genommen haben, ein Ticket f&uuml;r das %s Projekt an %s zu senden. F&uuml;llen Sie das nachstehende Formular aus, um Ihr Ticket einzureichen, und geben Sie bei der Beschreibung des Problems, zu dem Sie ein Ticket senden, so viele Informationen wie m&ouml;glich an. <br/> <br/> Geben Sie uns bitte mindestens 24 Stunden Zeit, bevor wir auf Ihr Ticket antworten .',
	'TRACKER_ADD_EXPLAIN_EMAIL'					=> 'Sie werden per E-Mail benachrichtigt, wenn ein Team Mitarbeiter &Auml;nderungen an Ihrem Ticket vornimmt oder eine Antwort sendet. Wir senden Ihnen eine Kopie Ihres Tickets per E-Mail f&uuml;r Ihre Unterlagen.',
	'TRACKER_ALL'								=> 'Alle Tickets',
	'TRACKER_ALL_CLOSED'						=> 'Alle geschlossenen Tickets',
	'TRACKER_ALL_OPENED'						=> 'Alle offenen Tickets',

	'TRACKER_ASSIGNED_TO'						=> 'Zugewiesen an',
	'TRACKER_ASSIGNED_TO_USERNAME'				=> 'zugewiesen an %s',
	'TRACKER_ASSIGNEES'							=> 'Beauftragte',
	'TRACKER_ASSIGN_USER'						=> 'Zuweisen zu',
	'TRACKER_ATTACHMENTS'						=> 'Anh&auml;nge',
	'TRACKER_ATTACHMENTS_ADD'					=> 'Anhang hinzuf&uuml;gen',
	'TRACKER_ATTACHMENTS_UPLOAD'				=> 'Anh&auml;nge hochladen',

	'TRACKER_BUG'								=> 'Fehler',
	'TRACKER_CANNOT_EDIT_TIME'					=> 'Dieses Ticket/Beitrag kann nicht mehr bearbeitet oder gel&ouml;scht werden.',
	'TRACKER_CHANGELOG_BBCODE'					=> 'BBCode',
	'TRACKER_CHANGELOG_EXAMPLE'					=> 'Beispiel Ausgabe',
	'TRACKER_CHANGELOG_HTML'					=> 'HTML',
	'TRACKER_CHANGE_PRIORITY'					=> 'Priorit&auml;t zuweisen',
	'TRACKER_CHANGE_SEVERITY'					=> 'Schweregrad zuweisen',
	'TRACKER_CHANGE_STATUS'						=> 'Status zuweisen',
	'TRACKER_CLOSED'							=> 'Geschlossen',
	'TRACKER_COMPONENT'							=> 'Komponente',
	'TRACKER_COMPONENT_NAME'					=> 'Komponenten Name',
	'TRACKER_COMPONENT_STATS'					=> 'Tickets nach Komponente',
	'TRACKER_CURRENTLY_SHOWING'					=> '<strong>Derzeit angezeigt:</strong> %s',
	'TRACKER_CURRENTLY_SHOWING_USER'			=> '%s Tickets, %s',
	'TRACKER_CURRENTLY_SHOWING_ASSIGNED'		=> 'Deine zugewiesene Tickets',
	'TRACKER_DELETE_NO_PERMISSION'				=> 'Sie haben keine Berechtigung, Tickets/Beitr&auml;ge vom Tracker zu l&ouml;schen.',
	'TRACKER_DELETE_POST'						=> 'Beitrag l&ouml;schen',
	'TRACKER_DELETE_POST_CONFIRM'				=> 'M&ouml;chten Sie den ausgew&auml;hlten Beitrag wirklich l&ouml;schen?',
	'TRACKER_DELETE_POST_SUCCESS'				=> 'Der ausgew&auml;hlte Beitrag wurde erfolgreich gel&ouml;scht.',
	'TRACKER_DELETE_TICKET'						=> 'Ticket l&ouml;schen',
	'TRACKER_DELETE_TICKET_CONFIRM'				=> 'M&ouml;chten Sie das ausgew&auml;hlte Ticket wirklich l&ouml;schen?',
	'TRACKER_DELETE_TICKET_SUCCESS'				=> 'Das ausgew&auml;hlte Ticket wurde erfolgreich gel&ouml;scht.',
	'TRACKER_DESCRIPTION'						=> 'Beschreibung',
	'TRACKER_DETAILS_VERSION'					=> 'Projekt Version',

	'TRACKER_EDIT_REASON'						=> 'Grund bearbeiten',
	'TRACKER_EDIT_REASON_EXPLAIN'				=> 'Geben Sie den Grund an, warum Sie den Beitrag/das Ticket bearbeitet haben',
	'TRACKER_EDIT_TICKET'						=> 'Ticket bearbeiten',
	'TRACKER_EMAIL_SUBJECT'						=> '[%s %s %s - #%s] %s',
	'TRACKER_ENVIRONMENT'						=> 'Umgebung',
	'TRACKER_ENVIRONMENT_EXPLAIN'				=> 'Diese Informationen zu Ihrer Umgebung k&ouml;nnen uns zus&auml;tzliche Details liefern, die uns bei der L&ouml;sung dieses Tickets helfen k&ouml;nnen.',
	'TRACKER_EVERYONES_ASSIGNED_TICKETS'		=> 'Alle Tickets',
	'TRACKER_EVERYONES_TICKETS'					=> 'Tickets f&uuml;r alle',
	'TRACKER_FILTER_COMPONENT'					=> ', Komponente %s',
	'TRACKER_FILTER_TICKET'						=> 'Tickets filtern',
	'TRACKER_FILTER_VERSION'					=> ', Version %s',

	'TRACKER_HIDE_TICKET'						=> 'Ticket ausblenden',
	'TRACKER_HIDE_TICKET_CONFIRM'				=> 'M&ouml;chten Sie dieses Ticket wirklich ausblenden?',
	'TRACKER_HIDE_TICKET_HISTORY'				=> 'Ticket Verlauf ausblenden',
	'TRACKER_HISTORY_ACTION_BY'					=> 'Aktion ausgef&uuml;hrt von %s » %s',
	'TRACKER_HISTORY_ASSIGNED_TO'				=> 'Zugewiesenes Ticket f&uuml;r den Benutzer "%s"',
	'TRACKER_HISTORY_ASSIGNED_TO_GROUP'			=> 'Zugewiesenes Ticket f&uuml;r die Gruppe "%s"',
	'TRACKER_HISTORY_PRIORITY_CHANGED'			=> 'Schweregrad des Tickets ge&auml;ndert von "%s" f&uuml;r "%s"',
	'TRACKER_HISTORY_SEVERITY_CHANGED'			=> 'Priorit&auml;t des Tickets ge&auml;ndert von "%s" f&uuml;r "%s"',
	'TRACKER_HISTORY_STATUS_CHANGED'			=> 'Status des Tickets ge&auml;ndert von "%s" f&uuml;r "%s"',
	'TRACKER_HISTORY_UNASSIGNED'				=> 'Zugewiesener Benutzer aus Ticket entfernt',
	'TRACKER_IMPLEMENTED_CVS'					=> 'In CVS implementiert',
	'TRACKER_IMPLEMENTED_SVN'					=> 'In SVN implementiert',
	'TRACKER_IMPLEMENTED_VCS'					=> 'In VCS implementiert',
	'TRACKER_IMPLEMENTING'						=> 'Implementierung',
	'TRACKER_INDEX'								=> 'Tracker index',
	'TRACKER_INVALID'							=> 'Ung&uuml;ltig',
	'TRACKER_IS_CLOSED_STATUS'					=> 'Ist "geschlossen" Status',
	'TRACKER_LAST_POST_BY'						=> 'Letzter Beitrag von %s » %s',
	'TRACKER_LAST_VISIT'						=> '<strong>Ticket zuletzt besucht von:</strong> %s auf %s',
	'TRACKER_LIST_ALL_TICKETS'					=> 'Liste aller Tickets',
	'TRACKER_LOCK_TICKET'						=> 'Ticket sperren',
	'TRACKER_LOCK_TICKET_CONFIRM'				=> 'M&ouml;chten Sie dieses Ticket wirklich sperren?',
	'TRACKER_MOVED_RETURN'						=> '%sZur&uuml;ck zum alten Projekt%s',
	'TRACKER_MOVE_TICKET'						=> 'Ticket verschieben',
	'TRACKER_MOVE_TICKET_CONFIRM'				=> 'Nach dem Verschieben werden die zugewiesene Benutzer, Status, Komponente, Version, Priorit&auml;t, Server und Ticket Verlauf zur&uuml;ckgesetzt. M&ouml;chten Sie das ausgew&auml;hlte Ticket wirklich in das ausgew&auml;hlte Projekt verschieben?',
	'TRACKER_MOVE_TICKET_SELECT'				=> 'Ziel Projekt ausw&auml;hlen',
	'TRACKER_MY_ASSIGNED_TICKETS'				=> 'Meine zugewiesenen Tickets',
	'TRACKER_MY_TICKETS'						=> 'Meine Tickets',
	'TRACKER_NAV_TICKET'						=> 'Ticket #',

	'TRACKER_NOT_ENOUGH_PROJECTS'				=> 'F&uuml;r die angeforderte Aktion sind nicht gen&uuml;gend Projekte vorhanden.',
	'TRACKER_NO_CHANGELOG'						=> 'F&uuml;r diese Version gibt es keine Changelog.',
	'TRACKER_NO_PROJECT_EXIST'					=> 'Derzeit befinden sich keine Projekte im Tracker.',
	'TRACKER_NO_STATUS_EXIST'					=> 'Derzeit befinden sich keine Status Typen im Tracker.',
	'TRACKER_NO_TICKETS'						=> 'Es sind keine Tickets zum Anzeigen vorhanden',

	'TRACKER_POSTED_ON_DATE'					=> '%s » %s',
	'TRACKER_POST_BY_AUTHOR'					=> 'Erstellt von %s » %s',
	'TRACKER_POST_NO_EXIST'						=> 'Der ausgew&auml;hlte Beitrag existiert nicht.',
	'TRACKER_POST_TICKET'						=> 'Neues Ticket erstellen',
	'TRACKER_PREVIEW'							=> 'Vorschau',
	'TRACKER_PREVIEW_REPLY'						=> 'Antwort Vorschau',
	'TRACKER_PREVIEW_TICKET'					=> 'Ticket Vorschau',
	'TRACKER_PREVIOUS_POSTS'					=> 'Vorherige Beitr&auml;ge',
	'TRACKER_PRIORITY'							=> 'Priorit&auml;t',
	'TRACKER_PRIORITY1'							=> 'Sofort',
	'TRACKER_PRIORITY2'							=> 'Dringend',
	'TRACKER_PRIORITY3'							=> 'Hoch',
	'TRACKER_PRIORITY4'							=> 'Normal',
	'TRACKER_PRIORITY5'							=> 'Niedrig',
	'TRACKER_PROJECTS'							=> 'Bitte w&auml;hlen Sie das Projekt aus, das Sie unten &ouml;ffnen m&ouml;chten. Tracker-Statistiken k&ouml;nnen auf dieser Seite %sHERE%s abgerufen werden.',
	'TRACKER_PROJECT_INFO'						=> 'Projekt Informationen',
	'TRACKER_PROJECT_NAME'						=> 'Projekt',
	'TRACKER_PROJECT_NAME_TITLE'				=> 'Projekt Name',
	'TRACKER_PROJECT_NO_EXIST'					=> 'Das ausgew&auml;hlte Projekt existiert nicht.',
	'TRACKER_PROJECT_RETURN'					=> '%sZur&uuml;ck zum aktuellen Projek%s',
	'TRACKER_TICKET_RETURN'						=> '%sZur&uuml;ck zum Orginalen Thema%s',
	'TRACKER_REPLY'								=> 'Auf Ticket antworten',
	'TRACKER_TICKET_LOCKED'						=> 'Ticket gesperrt',
	'TRACKER_REPLY_DETAIL'						=> 'Stellen Sie sicher, dass die Antwort auf dieses Ticket alle erforderlichen Informationen enth&auml;lt, und klicken Sie auf "Antwort senden", um Ihre Antwort zu senden.',
	'TRACKER_REPLY_DETAIL_EMAIL'				=> 'Die relevanten Team Mitglieder werden &uuml;ber das Erstellen dieses Tickets per E-Mail benachrichtigt.',
	'TRACKER_REPLY_EXPLAIN'						=> 'Verwenden Sie das folgende Formular, um eine Antwort auf das Ticket "%s" zu senden.',
	'TRACKER_REPLY_RETURN'						=> '%sZur&uuml;ck zum aktuellen Ticket%s',
	'TRACKER_REPORTED_BY'						=> 'Gemeldet von',
	'TRACKER_REPORTED_ON'						=> 'Gemeldet am',
	'TRACKER_REPORTERS_TICKETS'					=> 'Alle Tickets Meldungen',
	'TRACKER_RESEARCHING'						=> 'Recherchieren',
	'TRACKER_RETURN'							=> '%sZur&uuml;ck zur Tracker-Index Seite%s',

	'TRACKER_SEARCH_DESCRIPTION'				=> 'Suchbegriffe eingeben',
	'TRACKER_SECURITY_TICKET'					=> 'Sicherheit Ticket',
	'TRACKER_SELECT'							=> '(ausw&auml;hlen)',
	'TRACKER_SEND_PM'							=> 'PM senden',
	'TRACKER_SEVERITY'							=> 'Schweregrad',
	'TRACKER_SEVERITY1'							=> 'Kritisch',
	'TRACKER_SEVERITY2'							=> 'Wichtig',
	'TRACKER_SEVERITY3'							=> 'Normal',
	'TRACKER_SEVERITY4'							=> 'Unwichtig',
	'TRACKER_SEVERITY5'							=> 'Unbedeutend',
	'TRACKER_STATISTICS'						=> 'Bitte w&auml;hlen Sie das Projekt aus, dessen Statistik Sie unten anzeigen m&ouml;chten.',
	'TRACKER_STATS'								=> 'Tracker-Statistik',
	'TRACKER_STATUS'							=> 'Status',
	'TRACKER_STATUS_NAME'						=> 'Status Name',
	'TRACKER_SUBMITTED_RETURN'					=> '%sSehen Sie Ihr eingereichtes Ticket%s',
	'TRACKER_SUBMIT_A_TICKET'					=> 'Ticket absenden',
	'TRACKER_SUBMIT_REPLY'						=> 'Antwort absenden',
	'TRACKER_SUBMIT_TICKET'						=> 'Ticket absenden',
	'TRACKER_SUBMIT_TICKET_EXPLAIN'				=> 'M&ouml;chten Sie Ihr Ticket absenden? Bitte stellen Sie sicher, dass Sie ausreichend Informationen bereitgestellt haben, damit wir Ihnen schnell helfen k&ouml;nnen, ohne Sie f&uuml;r weitere Informationen kontaktieren zu m&uuml;ssen. Je mehr Informationen Sie angegeben haben, desto schneller k&ouml;nnen wir dieses Ticket bearbeiten.',

	'TRACKER_TICKET'							=> 'Ticket',
	'TRACKER_TICKETS'							=> 'Tickets',
	'TRACKER_TICKET_COMMENTS'					=> 'Kommentare',
	'TRACKER_TICKET_DBMS'						=> 'Datenbank System (optional)',
	'TRACKER_TICKET_DBMS_DETAIL'				=> 'Datenbank System',
	'TRACKER_TICKET_DBMS_EXPLAIN'				=> 'Das von Ihnen verwendete Datenbank System',
	'TRACKER_TICKET_DBMS_EXPLAIN_BAD'			=> '<strong class="text-danger">Schlecht:</strong> MySQL, phpMyAdmin 2.9.1.1, version 5',
	'TRACKER_TICKET_DBMS_EXPLAIN_GOOD'			=> '<strong class="text-success">Gut:</strong> MySQL 5.0.27',
	'TRACKER_TICKET_DESC'						=> 'Ticket Beschreibung',
	'TRACKER_TICKET_DESC_ERROR'					=> 'Ihre Beschreibung enth&auml;lt zu wenig Zeichen',
	'TRACKER_TICKET_DESC_EXPLAIN'				=> 'Ihre aktuelle Meldung. Bitte versuchen Sie so detailliert wie m&ouml;glich zu sein. Je mehr Informationen Sie bereitstellen, desto schneller k&ouml;nnen wir Ihnen helfen.',
	'TRACKER_TICKET_DETAILS'					=> 'Ticket Details',
	'TRACKER_TICKET_HIDDEN_FROM_VIEW'			=> 'Dieses Ticket ist f&uuml;r die &Ouml;ffentlichkeit nicht sichtbar. Es ist nur f&uuml;r Projekt Mitglieder sichtbar.',
	'TRACKER_TICKET_HISTORY'					=> 'Verlauf',
	'TRACKER_TICKET_ID'							=> 'Ticket ID',
	'TRACKER_TICKET_LOCKED_MESSAGE'				=> 'Dieses Ticket ist gesperrt, du kannst keine Beitr&auml;ge bearbeiten oder beantworten.',
	'TRACKER_TICKET_MESSAGE_ERROR'				=> 'Ihre Nachricht enth&auml;lt zu wenig Zeichen.',
	'TRACKER_TICKET_MOVED'						=> 'Das ausgew&auml;hlte Ticket wurde erfolgreich verschoben',
	'TRACKER_TICKET_NO_COMMENTS'				=> 'Es wurden keine Kommentare abgegeben',
	'TRACKER_TICKET_NO_EXIST'					=> 'Das ausgew&auml;hlte Ticket existiert nicht.',
	'TRACKER_TICKET_NO_HISTORY'					=> 'Kein Verlauf verf&uuml;gbar',
	'TRACKER_TICKET_PHP'						=> 'PHP Version (optional)',
	'TRACKER_TICKET_PHP_DETAIL'					=> 'PHP Version',
	'TRACKER_TICKET_PHP_EXPLAIN'				=> 'Die von Ihrem Server verwendete PHP-Version',
	'TRACKER_TICKET_PHP_EXPLAIN_BAD'			=> '<strong class="text-danger">Schlecht:</strong> Version 4, XAMPP 1.5.5, Windows XP, latest',
	'TRACKER_TICKET_PHP_EXPLAIN_GOOD'			=> '<strong class="text-success">Gut:</strong> 5.3.10',
	'TRACKER_TICKET_REPLY_SUBMITTED'			=> 'Ihr Beitrag wurde erfolgreich &uuml;bermittelt',
	'TRACKER_TICKET_SECURITY_FROM_VIEW'			=> 'Dieses Ticket ist ein Sicherheit Ticket und f&uuml;r die &Ouml;ffentlichkeit nicht sichtbar. Es ist nur f&uuml;r Projekt Mitglieder und den Verfasser sichtbar.',
	'TRACKER_TICKET_STATUS_OVERVIEW'			=> 'Ticket Status &Uuml;bersicht',
	'TRACKER_TICKET_SUBMITTED'					=> 'Ihr Ticket wurde erfolgreich &uuml;bermittelt.',
	'TRACKER_TICKET_TITLE'						=> 'Titel',
	'TRACKER_TICKET_TITLE_ERROR'				=> 'Sie m&uuml;ssen einen Titel eingeben, wenn Sie ein Ticket ver&ouml;ffentlichen.',
	'TRACKER_TICKET_TITLE_EXPLAIN'				=> 'Ein kurzer, beschreibender Titel f&uuml;r Ihr Ticket',
	'TRACKER_TICKET_TITLE_EXPLAIN_BAD'			=> '<strong class="text-danger">Schlecht:</strong> Exploit gefunden',
	'TRACKER_TICKET_TITLE_EXPLAIN_GOOD'			=> '<strong class="text-success">Gut:</strong> Die Variable $website wird in memberlist.php nicht ordnungsgem&auml;&szlig; maskiert.',
	'TRACKER_TICKET_UPDATED'					=> 'Das Ticket wurde erfolgreich aktualisiert.',
	'TRACKER_TOP_REPORTERS_TITLE'				=> 'Top %s Verfasser',
	'TRACKER_TOTAL_CLOSED_TICKETS'				=> 'Geschlossene Tickets insgesamt',
	'TRACKER_TOTAL_OPEN_TICKETS'				=> 'Offene Tickets insgesamt',
	'TRACKER_TOTAL_TICKETS'						=> 'Tickets insgesamt',
	'TRACKER_TYPE'								=> 'Art',
	'TRACKER_UNASSIGNED'						=> '(nicht zugewiesen)',
	'TRACKER_UNHIDE_TICKET'						=> 'Ticket einblenden',
	'TRACKER_UNHIDE_TICKET_CONFIRM'				=> 'M&ouml;chten Sie dieses Ticket wirklich ausblenden?',
	'TRACKER_UNKNOWN'							=> '(unbekannt)',
	'TRACKER_UNLOCK_TICKET'						=> 'Ticket freischalten',
	'TRACKER_UNLOCK_TICKET_CONFIRM'				=> 'M&ouml;chten Sie dieses Ticket wirklich entsperren?',

	'TRACKER_UNSECURITY_TICKET'					=> 'Normales Ticket',
	'TRACKER_UNWATCH_PROJECT'					=> 'Vom Projekt abmelden',
	'TRACKER_UNWATCH_TICKET'					=> 'Ticket abbestellen',
	'TRACKER_UPDATED_RETURN'					=> '%saktuelles Ticket anzeigen%s',
	'TRACKER_USERNAME'							=> 'Name',
	'TRACKER_USER_CANNOT_EDIT'					=> 'In diesem Projekt k&ouml;nnen keine Tickets/Beitr&auml;ge bearbeitet werden.',
	'TRACKER_VERSION'							=> 'Version',
	'TRACKER_VERSION_CHANGELOG'					=> '%s - &Auml;nderungen seit %s',
	'TRACKER_VERSION_NAME'						=> 'Version Name',
	'TRACKER_VERSION_STATS'						=> 'Tickets nach Version',
	'TRACKER_VERSION_VIEW_CHANGELOG'			=> '&Auml;nderungsprotokoll anzeigen',
	'TRACKER_VIEW_STATISTICS'					=> 'Statistiken anzeigen',
	'TRACKER_VIEW_TICKET_HISTORY'				=> 'Ticket Verlauf anzeigen',
	'TRACKER_WATCH_PROJECT'						=> 'Projekt abonnieren',
	'TRACKER_WATCH_TICKET'						=> 'Ticket abonnieren',
	'TRACKER_STATS'						        => 'Statistik',
	'TRACKER_SECURITY_EXPLAIN'					=> '<small>- (W&auml;hlen Sie diese Option, wenn ausgew&auml;hlte Tickets nur Team Mitgliedern und dem Verfasser angezeigt werden sollen, der sie ver&ouml;ffentlicht hat.)</small>',

	'TRACKER_FILTER_FILTER_BY'					=> 'Nach Status filtern',
	'TRACKER_FILTER_VERSION'					=> 'Nach Version filtern',
	'TRACKER_FILTER_COMPONENT'				    => 'Nach Komponente filtern',


	// tracker status labels //
	'TRACKER_UNREPRODUCIBLE'					=> '<small class="label label-danger reset-label">Nicht reproduzierbar</small>',
	'TRACKER_IMPLEMENTED'						=> '<small class="label label-success reset-label">Implementiert</small>',
	'TRACKER_FIXED'						        => '<small class="label label-success reset-label">Behoben</small>',
	'TRACKER_FIX_COMPLETED'						=> '<small class="label label-success reset-label">Fehlerbehebung abgeschlossen</small>',
	'TRACKER_FIX_COMPLETED_CVS'					=> '<small class="label label-success reset-label">Fehlerbehebung abgeschlossen in CVS</small>',
	'TRACKER_FIX_COMPLETED_SVN'					=> '<small class="label label-success reset-label">Fehlerbehebung abgeschlossen in SVN</small>',
	'TRACKER_FIX_COMPLETED_VCS'					=> '<small class="label label-success reset-label">Fehlerbehebung abgeschlossen in VCS</small>',
	'TRACKER_FIX_IN_PROGRESS'					=> '<small class="label label-warning reset-label">In bearbeitung</small>',
	'TRACKER_FEHLER_MELDEN'						=> '<small class="label label-danger reset-label">Fehler Melden</small>',
	'TRACKER_WILL_NOT_FIX'						=> '<small class="label label-danger reset-label">Wird nicht repariert</small>',
	'TRACKER_WILL_NOT_IMPLEMENT'				=> '<small class="label label-danger reset-label">Wird nicht implementiert</small>',
    'TRACKER_PENDING'							=> '<small class="label label-warning reset-label">Ausstehend </small>',
	'TRACKER_AWAITING_INFO'						=> '<small class="label label-default reset-label">Warten auf Informationen</small>',
	'TRACKER_AWAITING_INPUT'					=> '<small class="label label-default reset-label">Warten auf Team-Eingabe</small>',
	'TRACKER_REVIEWED'							=> '<small class="label label-default reset-label">&Uuml;berpr&uuml;ft</small>',
	'TRACKER_ALREADY_FIXED'						=> '<small class="label label-success reset-label">Bereits behoben</small>',
	'TRACKER_DUPLICATE'							=> '<small class="label label-warning reset-label">Duplizieren</small>',
	'TRACKER_SUPPORT_REQUEST'					=> '<small class="label label-default reset-label">Support Anfrage</small>',
	'TRACKER_NEW'								=> '<small class="label label-info reset-label">Neu</small>',
	'TRACKER_NOT_A_BUG'							=> '<small class="label label-inverse reset-label">Kein Fehler</small>',
	'TRACKER_REVIEW_LATER'						=> '<small class="label label-default reset-label">Sp&auml;ter pr&uuml;fen</small>',



	'VIEWING_TRACKER'							=> 'Tracker anzeigen',
	'VIEWING_TRACKER_PROJECT'					=> 'Projekt Anzeigen %s - %s',
	'VIEWING_TRACKER_STATISTICS'				=> 'Statistiken f&uuml;r %s - %s anzeigen',
	'VIEWING_TRACKER_STATISTICS_ALL'			=> 'Alle Statistiken anzeigen',
	'VIEWING_TRACKER_TICKET'					=> 'Ticket  f&uuml;r %s - %s anzeigen',

	'CHOOSE_PROJECT'							=> 'Projekt ausw&auml;hlen',
));

// in case add_lang is called twice
if (!function_exists('tracker_format_username'))
{
	/**
	 * Format a username correctly on localised basis
	 */
	function tracker_format_username($username)
	{
		if (in_array(strtolower(substr($username, -1, 1)), array('s', 'x', 'z'), true))
		{
			return $username . '\'';
		}
		else
		{
			return $username . '\'s';
		}
	}
}
?>