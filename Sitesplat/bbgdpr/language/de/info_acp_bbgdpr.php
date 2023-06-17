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
'ACP_BBGDPR'                                       => 'BBgdpr',
'ACP_BBGDPR_EXPLAIN'                               => 'Vergessen Sie nicht, die Gruppenberechtigung zu pr&uuml;fen, damit Benutzer ihre Beitr&auml;ge l&ouml;schen k&ouml;nnen, wenn sie ihre Konten l&ouml;schen (standardm&auml;&szlig;ig deaktiviert, und der Benutzername des gel&ouml;schten Kontos wird durch einen automatisch zuf&auml;llig generierten Benutzernamen ersetzt). <br/> Sie k&ouml;nnen die Nutzerakzeptanzdaten auch unter ACP &#62; Benutzer und Gruppen: Benutzer verwalten. <br/> Unter ACP &#62; Wartung: Benutzerprotokolle.',
'GDPR'                                             => 'GDPR',
'DELETED_USERS'                                    => 'Gesamtzahl der Benutzer, die ihren Account unter GDPR gel&ouml;scht haben: <strong>%d</strong>. <br/>',

'SS_HELPER_NOTY'                                   => 'SiteSplat BBcore existiert nicht! <br/> Laden Sie den <a href="http://sitesplat.com" target="_blank">BBcore</a> herunter und kopieren Sie den BBcore-Ordner in Ihren Sitesplat Erweiterungsordner.',
'BBGDPR_NOTICE'                                    => '<div class="phpinfo"><p>Die Einstellungen f&uuml;r diese Erweiterung befinden sich auf der Registerkarte "EXTENSIONS".<br/>An verschiedenen Stellen gibt es auch andere Einstellungen:<br/> &#45; Gruppengenehmigung <br/> &#45; ACP &#62; Benutzer und Gruppen: Benutzer verwalten <br /> &#45; ACP &#62; Wartung: Benutzerprotokolle <br/> &#45; UCP &#62; Datenschutz <br/> Lesen Sie abschlie&szlig;end die Datenschutzvorlage sofort durch, um sicherzustellen, dass sie Ihr Forum korrekt darstellt.</p></div>',

'ACP_GDPR_SETTINGS_SAVED'                          => 'Die GDPR-Einstellung wurde gespeichert.',

'PRIVACY_POLICY'                                   => 'Datenschutzerkl&auml;rung',
'PRIVACY_POLICY_EXPLAIN'                           => 'Der hier eingegebene Inhalt wird allen Benutzern angezeigt, um Ihre Richtlinie gem&auml;&szlig; den Anforderungen von GDPR zu akzeptieren. Sie k&ouml;nnen HTML verwenden. <br/> Bitte beachten Sie, dass jedes Mal, wenn Sie dieses Formular bearbeiten, das GDPR-Akzeptanzdatum zur&uuml;ckgesetzt wird und f&uuml;r alle Benutzer erneut akzeptiert werden muss. Auf diese Weise k&ouml;nnen die Administratoren die GDPR-Datenschutzerkl&auml;rung bei einem Update leichter erneut durchsetzen. <br/> &Uuml;berpr&uuml;fen Sie die Standardrichtlinie sofort, da sie f&uuml;r die allgemeine Berichterstattung in Foren vorgesehen ist und m&ouml;glicherweise nicht geeignet ist f&uuml;r dein Forum.',

'COOKIES_BANNER'                                   => 'Cookies EU banner',
'TRACKING_CODES'                                   => 'Tracking codes',
'TRACKING_CODES_EXPLAIN'                           => 'F&uuml;gen Sie alle Tracking-Codes, die Sie f&uuml;r Analysen und/oder andere Zwecke verwenden, hier ein, ohne dass das <samp> &lt;script&gt;</samp> Tag sie umschlie&szlig;t, getrennt durch eine Leerzeile. Codes werden nur f&uuml;r Benutzer ausgef&uuml;hrt, die von diesen Diensten generierte Cookies akzeptieren (IE: Google Analytics).',
'SITESPLAT_BBGDPR_ADSENSE'                         => 'AdSense code',
'SITESPLAT_BBGDPR_ADSENSE_EXPLAIN'                 => 'F&uuml;gen Sie Ihren AdSense-Code ein, der nur eingef&uuml;gt wird, wenn der Nutzer Cookies akzeptiert. (Weitere Informationen finden Sie hier: <a href="https://support.google.com/adsense/answer/9007336" target="_blank">Kontrolle der Einwilligung der EU-Nutzer in AdSense</a>)<br>Verwenden Sie Folgenden Code:<br><code> &#x3C;! - WENN S_GDPR_JS_ALLOWED - &#x3E; {{GDPR_ADSENSE}} &#x3C;! - ENDIF - &#x3E;</code> in Ihrem Premium-Design Wenn Sie das Mini-CMS installiert haben, k&ouml;nnen Sie es auch so &auml;ndern, dass der Code wie folgt verwendet wird: <br><code> &#x3C;! - IF ADSENSE_FOOTER neq &#x27; &#x27; - &#x3E; &#x3C;! - IF S_GDPR_JS_ALLOWED - &#x3E; &#x3C; div class=&#x22; clearfix text-center &#x22; &#x3E; {ADSENSE_FOOTER} &#x3C;/div &#x3E; &#x3C;! - ENDIF - &#x3E; &x3C;! - ENDIF - &#x3E;</code>',
'SITESPLAT_BBGDPR_GEOIP'                           => 'GeoIP-Ortungsdienst zur Ermittlung der EU-B&uuml;rger verwenden',
'SITESPLAT_BBGDPR_GEOIP_EXPLAIN'                   => 'Dadurch k&ouml;nnen Benutzer anhand ihrer IP-Adresse gesucht werden, um Cookies EU-Banner nur f&uuml;r EU-B&uuml;rger anzuzeigen. Beachten Sie, dass dieser Standortdienst ungenau ist und zu einer falschen Erkennung des Benutzerstandorts f&uuml;hren kann. Au&szlig;erdem ist die IP-Suche eine lastabh&auml;ngige Aufgabe, die den Server verlangsamen kann.',

'SITESPLAT_BBGDPR_DELETE_KEEP_USERNAME'            => 'Benutzername beim L&ouml;schen des Kontos beibehalten',
'SITESPLAT_BBGDPR_DELETE_KEEP_USERNAME_EXPLAIN'    => 'Auf Nein setzen, um einen zuf&auml;lligen Benutzernamen zu generieren, der den aktuellen Benutzernamen ersetzt, wenn der Benutzer sein Konto l&ouml;scht.',
'SITESPLAT_BBGDPR_ACCEPT_OLD_USERS'                => 'GDPR-Seite nur f&uuml;r vorhandene Benutzer erzwingen',
'SITESPLAT_BBGDPR_ACCEPT_OLD_USERS_EXPLAIN'        => 'Es ist nicht erforderlich, dass neue Benutzer gezwungen werden, da diese Benutzer bereits auf der Registrierungsseite akzeptiert wurden. Auf Nein setzen, um alle Benutzer zu zwingen, die GDPR-Seite zu akzeptieren.',
'SITESPLAT_BBGDPR_REQUEST_DELETE'                  => 'Art der L&ouml;schung',
'SITESPLAT_BBGDPR_REQUEST_DELETE_EXPLAIN'          => 'Auf Anforderung setzen, um eine PM von einem Benutzer zu erhalten, der sein Konto l&ouml;schen m&ouml;chte. Anderenfalls k&ouml;nnen Benutzer ihren Account selbst l&ouml;schen.',
'REQUEST_DELETE'                                   => 'Anfrage',
'SELF_DELETE'                                      => 'Selber',

'LOG_USER_REJECTED_PRIVACY'                        => '<strong>Neue Datenschutzbestimmungen abgelehnt.</strong><br>» Vorheriges Akzeptanzdatum: %s',
));