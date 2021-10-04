<?php
/**
*
* Profile Wall
* @copyright (c) 2015 SiteSplat All rights reserved
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
	'PROFILE_COMMENT'						=> array(
		1	=> '%1s Profil Kommentar',
		2	=> '%1s Profil Kommentare'
	),
	'PROFILE_REPLIES'						=> array(
		1	=> '%1s Profil antwort',
		2	=> '%1s Profil antworten'
	),

	'PROFILE_VIEW_COMMENT'					=> 'Profil Kommentare',
	'PROFILE_VIEW_REPLY'				    => 'Profil antworten',
	'PROFILE_WALL'							=> 'Profilnachrichten',
	'POST_COMMENT'							=> 'Kommentar erstellen',
	'POST_REPLY'							=> 'Antwort schreiben',
	'SHOW_REPLY'							=> 'Antworten anzeigen',
	'HIDE_REPLY'							=> 'Antworten ausblenden',
	'SHOW_COUNTERS'							=> 'Zähler im Benutzerprofil anzeigen',
	'SHOW_COUNTERS_EXPLAIN'					=> 'Im Benutzerprofil die Anzahl der Nachrichten anzeigen',
	'REPLY_ENABLED'							=> 'Antworten erlaubt?',
	'REPLY_ENABLED_EXPLAIN'					=> 'Sollen Antworten für Kommentare aktiviert werden',
	'HIDE_REPLY_EXPLAIN'					=> 'Antworten standardmäßig ausblenden',
	'REPLY_PADDING'							=> 'Antwort von Links einrücken',
	'REPLY_PADDING_EXPLAIN'					=> 'Anzahl der Pixel, die eine Antwort von links einrückt',
	'HIDE_FORM'								=> 'Formular ausblenden',
	'EDIT'									=> 'bearbeiten',
	'COMMENT_UPDATED'						=> 'Antwort aktualisiert',
	'NEW_COMMENT_PLACEHOLDER'			    => 'Geben Sie Ihren Kommentar ein. Standard BBcodes und Smilies sind erlaubt',
	'HIS'									=> 'seine',
	'YOUR'									=> 'deine',
	'NOTIFICATION_PROFILE_COMMENT' 			=> '%1s hat einen Kommentar geschrieben in deinem profil.',
	'NOTIFICATION_PROFILE_COMMENT_OPTION'	=> 'Jemand schreibt einen Kommentar in deinem Profil',
	'NOTIFICATION_PROFILE_REPLY'			=> '%s hat eine Antwort auf einen Kommentar geschrieben.',
	'NOTIFICATION_PROFILE_COMMENT_REPLY'	=> 'Jemand kommentiert eine Ihrer Antworten auf der Profilseite',
));