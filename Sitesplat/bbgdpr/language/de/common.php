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
'BBGDPR_TITLE'                         => 'GDPR',
'BBGDPR_PRIVACY_POLICY'                => 'GDPR - Allgemeine Datenschutzverordnung',
'BBGDPR_ACCEPTED'                      => 'Akzeptiert am',
'PRIVACY_ACCEPT_DATE'                  => 'Datum der Annahme der Datenschutzrichtlinie',
'COOKIE_ACCEPT_DATE'                   => 'Datum der Annahme der Cookie-Richtlinie',
'NOT_ACCEPTED'                         => 'Richtlinie wurde nicht akzeptiert',
'MCP_ACCEPT_DATE'                      => '&Uuml;berpr&uuml;fungsdatum der GDPR-Richtlinien f&uuml;r MCP',
'LOG_USER_DELETED'                     => 'Benutzer %s (ID %s) hat sein eigenes Konto gel&ouml;scht. ',
'LOG_POST_RETAINED'                    => 'Ihre Beitr&auml;ge wurden beibehalten.',
'LOG_POST_REMOVED'                     => 'Ihre Posts wurden entfernt.',
'LOG_NO_POSTS'                         => 'Sie hatten keine Posts.',

'LOG_USER_DELETED_RETAINED'            => '<strong>Gel&ouml;schter Benutzer &uuml;ber GDPR</strong><br />» Benutzer %s (ID %s) hat sein eigenes Konto gel&ouml;scht. Ihre Beitr&auml;ge wurden beibehalten.',
'LOG_USER_DELETED_REMOVED'             => '<strong>Gel&ouml;schter Benutzer &uuml;ber GDPR</strong><br />» Benutzer %s (ID %s) hat sein eigenes Konto gel&ouml;scht. Ihre Beitr&auml;ge wurden entfernt.',
'LOG_USER_DELETED_NO'                  => '<strong>Gel&ouml;schter Benutzer &uuml;ber GDPR</strong><br />» Benutzer %s (ID %s) hat sein eigenes Konto gel&ouml;scht. Sie hatten keine Beitr&auml;ge.',

// notification
'SITESPLAT_BBGDPR_USER_DELETED'        => 'Benutzer %s hat sein Account gel&ouml;scht.',
'NOTIFICATION_TYPE_BBGDPR'             => 'Ein Benutzer l&ouml;scht sein Konto unter GDPR',

// cookies
'COOKIE_CONSENT'                       => 'Indem Sie Ihren Besuch auf dieser Website fortsetzen, akzeptieren Sie die Verwendung von Cookies.',
'REJECT_BBGDPR_COOKIE'                 => 'Ablehnen',
'ACCEPT_BBGDPR_COOKIE'                 => 'Ich akzeptiere die Verwendung von Cookies',
'ACCEPT_GDPR'                          => 'Ich akzeptiere die DSGVO-Richtlinie',
'REJECT_GDPR'                          => 'Ablehnen (Sie werden abgemeldet)',
// mcp
'GDPR_REVIEW'                          => 'Überprüfung der DSGVO-Richtlinien',
'GDPR_NOT_REVIEWED'                    => 'Um auf MCP zugreifen zu können, müssen Sie bestätigen, dass Sie die DSGVO-Richtlinien gelesen haben. Lesen Sie die DSGVO-Richtlinien: <a href="https://gdpr-info.eu/">https://gdpr-info.eu/</a>',
'GDPR_REVIEW_CONFIRM'                  => 'Ich bestätige, die DSGVO-Richtlinien gelesen zu haben',
'MCP_ACCEPT_FIRST'                     => 'Um auf MCP zugreifen zu können, müssen Sie bestätigen, dass Sie die DSGVO-Richtlinien gelesen haben. Bitte <a href="%s">bestätigen Sie dies, bevor Sie eine Moderatoraktion durchführen</a>.',

// privacy
'BBGDPR_LAST_UPDATED'                  => 'Letzte Aktualisierung: %s',
'BBGDPR_GDPR_ACCEPTED'                 => 'Zuvor akzeptiert am ',
'REVIEW_PERSONAL_DATA'                 => 'Überprüfen Sie Ihre persönlichen Daten',
'REACCEPT_COOKIE'                      => 'Anscheinend haben Sie die Cookie-Richtlinie zuvor abgelehnt. Haben Sie Ihre Meinung geändert?',
));