<?php
/**
*
* @package BBgdpr
* @copyright (c) 2018 SiteSplat All rights reserved
* @license Proprietary
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
	// used both in ACP and/or UCP and/or all pages
	'BBGDPR_TITLE'	        => 'GDPR',
	'BBGDPR_PRIVACY_POLICY'	=> 'GDPR - Allgemeine Datenschutzverordnung',
	'PRIVACY_ACCEPT_DATE'	=> 'Datum der Annahme der Datenschutzrichtlinie',
	'COOKIE_ACCEPT_DATE'	=> 'Datum der Annahme der Cookie-Richtlinie',
	'NOT_ACCEPTED'			=> 'Richtlinie wurde nicht akzeptiert',
	'MCP_ACCEPT_DATE'		=> '&Uuml;berpr&uuml;fungsdatum der GDPR-Richtlinien f&uuml;r MCP',
	'LOG_USER_DELETED'		=> 'Benutzer %s (ID %s) hat sein eigenes Konto gel&ouml;scht. ',
	'LOG_POST_RETAINED'		=> 'Ihre Beitr&auml;ge wurden beibehalten.',
	'LOG_POST_REMOVED'		=> 'Ihre Posts wurden entfernt.',
	'LOG_NO_POSTS'			=> 'Sie hatten keine Posts.',

	'LOG_USER_DELETED_RETAINED'	=> '<strong>Gel&ouml;schter Benutzer &uuml;ber GDPR</strong><br />» Benutzer %s (ID %s) hat sein eigenes Konto gel&ouml;scht. Ihre Beitr&auml;ge wurden beibehalten.',
	'LOG_USER_DELETED_REMOVED'	=> '<strong>Gel&ouml;schter Benutzer &uuml;ber GDPR</strong><br />» Benutzer %s (ID %s) hat sein eigenes Konto gel&ouml;scht. Ihre Beitr&auml;ge wurden entfernt.',
	'LOG_USER_DELETED_NO'		=> '<strong>Gel&ouml;schter Benutzer &uuml;ber GDPR</strong><br />» Benutzer %s (ID %s) hat sein eigenes Konto gel&ouml;scht. Sie hatten keine Beitr&auml;ge.',

	// notification
	'SITESPLAT_BBGDPR_USER_DELETED'	=> 'Benutzer %s hat sein Account gel&ouml;scht.',
	'NOTIFICATION_TYPE_BBGDPR'	    => 'Ein Benutzer l&ouml;scht sein Konto unter GDPR',

	// cookies
	'COOKIE_CONSENT'		=> 'Wenn Sie Ihren Besuch auf dieser Website fortsetzen, stimmen Sie der Verwendung von Cookies zu.',
	'REJECT'				=> 'Ablehnen',
	'ACCEPT'				=> 'Ich akzeptiere die Verwendung von Cookies',
	'ACCEPT_GDPR'	   		=> 'Ich akzeptiere die GDPR-Datenschutzverordnung',
	'BBGDPR_ACCEPTED'       => 'angenommen am',
	'REJECT_GDPR'			=> 'Ablehnen (Sie werden abgemeldet)',
	// mcp
	'GDPR_REVIEW'			=> '&Uuml;berpr&uuml;fung der GDPR-Datenschutzverordnung',
	'GDPR_NOT_REVIEWED'		=> 'Um auf MCP zugreifen zu k&ouml;nnen, m&uuml;ssen Sie best&auml;tigen, dass Sie die GDPR-Datenschutzverordnung &uuml;berpr&uuml;ft haben. &Uuml;berpr&uuml;fen Sie die GDPR-Datenschutzverordnung: <a href="https://gdpr-info.eu/">https://gdpr-info.eu/</a>',
	'GDPR_REVIEW_CONFIRM'	=> 'Ich best&auml;tige, die GDPR-Datenschutzverordnung &uuml;berpr&uuml;ft zu haben',
	'MCP_ACCEPT_FIRST'		=> 'Um auf MCP zugreifen zu k&ouml;nnen, m&uuml;ssen Sie best&auml;tigen, dass Sie die GDPR-Datenschutzverordnung &uuml;berpr&uuml;ft haben. Bitte <a href="%s"> best&auml;tigen Sie dies, bevor Sie eine Moderatoraktion ausf&uuml;hren </a>..',

	// privacy
	'LAST_UPDATED'			=> 'Letzte Aktualisierung: %s',
	'REVIEW_PERSONAL_DATA'	=> '&Uuml;berpr&uuml;fen Sie Ihre pers&ouml;nlichen Daten',
	'REACCEPT_COOKIE'		=> 'Sieht so aus, als h&auml;tten Sie die Cookie-Richtlinie zuvor abgelehnt. Hast du deine Meinung ge&auml;ndert?',

));