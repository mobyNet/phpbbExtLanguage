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

$lang = array_merge($lang, array(
	'ACL_U_TRACKER_VIEW' => 'Kann Tickets sehen',
	'ACL_U_TRACKER_POST' => 'Kann Tickets erstellen',
	'ACL_U_TRACKER_DELETE_ALL' => 'Kann alle Tickets/Beitr&auml;ge in der Projekt Gruppe l&ouml;schen',
	'ACL_U_TRACKER_DELETE_GLOBAL' => 'Kann alle Tickets/Beitr&auml;ge in jedem Projekt bearbeiten',
	'ACL_U_TRACKER_EDIT' => 'Kann eigene Tickets/Beitr&auml;ge bearbeiten',
	'ACL_U_TRACKER_EDIT_GLOBAL' => 'Kann alle Tickets/Beitr&auml;ge in jedem Projekt bearbeiten',
	'ACL_U_TRACKER_EDIT_ALL' => 'Kann alle Tickets/Beitr&auml;ge in einer Projekt Gruppe bearbeiten',
	'ACL_U_TRACKER_ATTACH' => 'Kann Dateien an Tickets/Beitr&auml;ge anh&auml;ngen',
	'ACL_U_TRACKER_DOWNLOAD' => 'Kann Dateien von Tickets/Beitr&auml;ge herunterladen',
	'ACL_U_TRACKER_TICKET_SECURITY' => 'Kann Sicherheit Tickets angeben, wenn diese f&uuml;r das Projekt aktiviert sind',
	'ACL_F_TRACKER_TICKET_FROM_TOPIC' => 'Kann ein neues Ticket au&szlig;erhalb des Themas erstellen',
	'ACL_A_TRACKER' => 'Kann Tracker verwalten',
));
