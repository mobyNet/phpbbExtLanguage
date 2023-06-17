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
'UCP_PRIVACY'                      => 'Datenschutz',

'UCP_REVIEW'                       => 'Pers&ouml;nliche Daten &uuml;berpr&uuml;fen',
'UCP_REVIEW_EXPLAIN'               => 'Nachfolgend finden Sie die Details Ihrer pers&ouml;nlichen Daten, die wir auf dieser Seite speichern. Vergessen Sie nicht, auf der Registerkarte "Profil" andere pers&ouml;nliche Informationen anzusehen.',
'REG_DATE'                         => 'Registrierungsdatum und zeit',
'COOKIE_CHANGED_MIND'              => 'Hast du deine Meinung ge&auml;ndert? <a href="%s"> Cookies akzeptieren </a>.',
'REG_IP'                           => 'Registrierungs IP',
'USER_IPS'                         => 'Von Ihnen verwendete IP-Adressen',

'UCP_DOWNLOAD'                     => 'Daten Herunterladen',
'UCP_DOWNLOAD_EXPLAIN'             => 'Nachfolgend k&ouml;nnen Sie alle Daten Herunterladen, die dieses Forum &uuml;ber Sie und Ihre Beitr&auml;ge speichert. Sie erhalten eine ZIP-Datei mit dem Verzeichnis <samp>posts/</samp> mit einem anderen Unterverzeichnis, das wie folgt aufgebaut ist: Das erste Verzeichnis ist die Forum-ID, in dem sich andere Unterverzeichnisse befinden, die nach der Themen-ID in diesem Forum benannt sind. In diesen Verzeichnissen befinden sich HTML-Dateien, die als UNIX-Zeitstempel der Zeit angegeben wurden, als Sie den Beitrag erstellt haben. Wenn Sie alle Ihre Daten herunterladen m&ouml;chten, erhalten Sie eine weitere Datei mit dem Namen <samp>personal.txt</samp>, in der Sie alle pers&ouml;nlichen Daten finden, die dieses Board &uuml;ber Sie gespeichert hat. ',
'UCP_DOWNLOAD_BTN_POSTS'           => 'Beitr&auml;ge herunterladen',
'UCP_DOWNLOAD_BTN_DATA'            => 'Laden Sie Ihre pers&ouml;nlichen Daten herunter',
'UCP_USER_NO_POSTS'                => 'Sie haben keine Beitr&auml;ge zum Herunterladen.',

'UCP_DELETE'                       => 'Konto l&ouml;schen',
'CANNOT_DELETE_ACCOUNT'            => 'Du kannst deinen Account nicht l&ouml;schen, da du ein Gr&uuml;nder dieses Boards bist.',
'DELETE_MY_ACCOUNT_TEXT'           => 'Mit diesem Formular k&ouml;nnen Sie Ihr eigenes Konto l&ouml;schen. Sobald Sie fertig sind, werden alle Ihre pers&ouml;nlichen und privaten Daten von dieser Website entfernt und Sie k&ouml;nnen sich nicht mehr anmelden.',
'REALY_DELETE'                     => 'Ich m&ouml;chte meinen Account wirklich l&ouml;schen.',
'UNDERSTAND_DELETE'                => 'Ich verstehe, dass diese Aktion nicht r&uuml;ckg&auml;ngig gemacht werden kann.',
'DELETE_MY_POSTS'                  => 'L&ouml;sche auch meine Beitr&auml;ge (Beitr&auml;ge werden zu Gastbeitr&auml;gen mit zuf&auml;lligen falschen Namen, wenn nicht markiert).',
'ENTER_PASSWORD'                   => 'Geben Sie Ihr Passwort ein',
'ENTER_PASSWORD_EXPLAIN'           => 'Dies ist das gleiche Passwort, das Sie derzeit f&uuml;r Ihr Konto verwenden.',
'ENTER_PASSWORD_HERE'              => 'Geben Sie hier Ihr Passwort ein ...',
'DELETE_FINAL'                     => 'Endg&uuml;ltige Best&auml;tigung',
'DELETE_FINAL_CONFIRM'             => '<p>Vielen Dank, dass Sie Mitglied dieser Seite sind. Wir bedauern, dass Sie fortfahren.</P><p>Ihre Anfrage zur L&ouml;schung Ihres Kontos wurde best&auml;tigt. Dies ist eine endg&uuml;ltige Best&auml;tigung und kann nicht r&uuml;ckg&auml;ngig gemacht werden. M&ouml;chten Sie Ihr Konto wirklich dauerhaft l&ouml;schen?</P>',

'FOUNDER_ERROR'                    => 'Gr&uuml;nder k&ouml;nnen den Selbstl&ouml;schvorgang nicht verwenden.',
'REALLY_ERROR'                     => 'Sie m&uuml;ssen best&auml;tigen, dass Sie Ihr Konto wirklich l&ouml;schen m&ouml;chten.',
'UNDERSTAND_ERROR'                 => 'Sie m&uuml;ssen best&auml;tigen, dass Sie verstehen, dass dieser Vorgang nicht r&uuml;ckg&auml;ngig gemacht werden kann.',
'PASSWORD_ERROR'                   => 'Das eingegebene Passwort war nicht korrekt.',
'GOODBYE_ERROR'                    => 'Ihr Konto wurde gel&ouml;scht.',

'REQUEST_FOR_DELETION_SUBJECT'     => 'Antrag auf L&ouml;schung eines Kontos - DSGVO',
'REQUEST_FOR_DELETION_BODY'        => 'Ich fordere an, meinen Account zu l&ouml;schen.',
'DELETE_REQUEST_REALLY'            => 'Endg&uuml;ltige Best&auml;tigung',
'DELETE_REQUEST_REALLY_CONFIRM'    => '<p>Vielen Dank, dass Sie Mitglied dieser Seite sind. Wir bedauern, dass Sie fortfahren.</P><p> Ihre Anfrage zur L&ouml;schung Ihres Kontos wurde best&auml;tigt. Dies ist eine endg&uuml;ltige Best&auml;tigung. M&ouml;chten Sie wirklich Administratoren dieses Forums auffordern, Ihr Konto endg&uuml;ltig zu l&ouml;schen?</p>',
'REQUEST_FOR_DELETION_SENT'        => 'Ihre Anfrage wurde erfolgreich an die Administratoren gesendet. Sie werden Ihre Anfrage so schnell wie m&ouml;glich bearbeiten.',
));