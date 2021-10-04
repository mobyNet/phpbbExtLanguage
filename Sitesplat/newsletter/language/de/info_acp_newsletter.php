<?php
/**
*
* @package BBnewsletter
* @copyright (c) 2016 SiteSplat All rights reserved
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
	'ACP_NEWSLETTER'			=> 'Newsletter',
	'ACP_NEWSLETTER_EXPLAIN'	=> 'Richten Sie Ihren Newsletter ein. Unten finden Sie mehrere Optionen. Bitte stellen Sie sicher, dass Ihr Mailserver alle Mails akzeptiert, andernfalls werden die Mail-Einstellungen von phpbb\ verwendet, um Mails in kleinen Stapeln zu versenden. <br />Die wöchentlichen und monatlichen "Catch-up"-Forumsnachrichten werden über den Cron-Task verschickt. Installieren Sie die <a href="https://github.com/ForumHulp/cronstatus" target="_blank">Cronstatus-Erweiterung</a> und wählen Sie in den Optionen "Cron immer ausführen", um die "Catch-up"-Nachrichten häufiger zu versenden (dies ist besonders für kleine Foren nützlich). <br />Für HTML-E-Mails installieren Sie <a href=" https://github.com/ForumHulp/htmlemail" target="_blank">HTML emails Extension</a>, die die HTML-Einstellungen aktiviert.<br />',
    'FORUMS_NEWS_FROM'		    => 'Quelle des Newsletter-Forums',
	'FORUMS_FROM_EXPLAIN'		=> 'Wählen Sie die Foren aus, von denen die Benutzer die Nachrichten erhalten sollen.',
	'SEND_IMMEDIATELY'			=> 'Sofort senden',
	'SEND_IMMEDIATELY_EXPLAIN'	=> 'Versuchen Sie, die E-Mails sofort zu versenden. Dies hängt von den Parametern der E-Mail-Konfiguration des Servers ab',
	'PERIOD'					=> 'Email  &Uuml;bersicht (oder Catch-up) Phase',
	'PERIOD_EXPLAIN'			=> 'Diese Funktion sendet automatisch "Catch-up"-E-Mails an die Benutzer, die das Forum abonniert haben. Die E-Mail wird auf der Grundlage der neuen Themen im Forum erstellt. Der Benutzer erhält eine E-Mail mit dem Ziel, das Interesse des Benutzers an den jüngsten Aktivitäten des Forums zu wecken. Bearbeiten Sie die Vorlagendatei mit dem Namen newsletter_html.txt für die HTML-Version und newsletter_txt.txt für die TXT-Version von:<br /> <code>root\ext\sitesplat\newsletter\language\en\email\</code> <br /> Um zu lernen, wie man professionell aussehende HTML-E-Mails versendet, schauen Sie sich die Tutorials auf <a href=" https://sitesplat.com/" target="_blank">sitesplat.com</a> an oder klicken Sie oben auf das Label "Tutorials".',
	'WEEKLY'					=> 'Wöchentlich',
	'MONTHLY'					=> 'Monatlich',
	'NO_OVERVIEW'				=> 'Keine',
	'PERIOD_SEND'				=> 'Zeitraum für automatischen Newsletter festlegen',
	'SEND_TO_GROUP'				=> 'An Gruppe senden',
	'SEND_TO_USERS'				=> 'An den/die Benutzer senden',
	'SEND_TO_USERS_EXPLAIN'		=> 'Wenn Sie dieses Feld verwenden, hat es Vorrang vor der obigen Option "An Gruppe senden". Jeder Benutzer in einer neuen Zeile',
	'ALL_USERS'					=> 'Alle Benutzer',
	'NEW_USER'					=> 'Neue Benutzer zulassen',
	'MAIL_LOW_PRIORITY'			=> 'Niedrig',
	'MAIL_NORMAL_PRIORITY'		=> 'Normal',
	'MAIL_HIGH_PRIORITY'		=> 'Hoch',
	'MAIL_PRIORITY'				=> 'Priorität der E-Mail',
	'USE_HTML'					=> 'HTML für E-Mails benutzen',
	'COMPOSE_HTML'				=> 'Manuell senden',
	'COMPOSE_HTML_EXPLAIN'		=> 'Wenn "Manuell senden" ausgewählt ist, steht der HTML-Editor zur Verfügung, um benutzerdefinierte E-Mails im HTML-Format zu versenden.',
	'MASS_MESSAGE'				=> 'Nachricht (Newsletter Body)',
	'MASS_MESSAGE_EXPLAIN'		=> 'Die HTML-Nachricht wird entfernt, wenn die HTML-E-Mail-Erweiterung nicht aktiviert ist. Um den HTML-Editor zu verwenden, klicken Sie auf "Werkzeuge" und dann auf "Quellcode" und geben Sie den HTML-Code in den Code-Editor ein ',
	'FHHTML_EMAIL_NOT_ENABLED'	=> 'HTML für E-Mail-Erweiterung nicht aktiviert. Laden Sie es von https://github.com/ForumHulp/htmlemail herunter.',
	'FHHTML_EMAIL_DOWNLOAD'	    => 'HTML für E-Mail Erweiterung nicht aktiviert. Laden Sie sie herunter von <a href="https://github.com/ForumHulp/htmlemail" target="blank">GithHub HTML Email Ext</a>',
	'LAST_SEND'					=> '<span id="viewsubscribers" class="label label-info" title="Ansicht Abonennten">%1$s Mitglieder</span> abonniert, letzter Newsletter wurde verschickt am <strong class="text-info">%2$s</strong>',
	'LAST_SEND_LETTERS'			=> 'Letzter Newsletter',
	'LAST_SEND_EXPLAIN'			=> '**Bitte beachten Sie, dass neu registrierte Benutzer automatisch angemeldet werden. (Klicken Sie oben auf "X Mitglieder", um die Benutzerliste anzuzeigen)',
	'LAST_NEWSLETTERS_EXPLAIN'	=> '**Bitte beachten Sie, dass die folgende Vorlage, die in den einzelnen E-Mails unten angezeigt wird, NICHT zu 100% der versendeten E-Mail entspricht. Das liegt daran, dass das ACP-Stylesheet von phpBB\ veraltete CSS-Rücksetzregeln enthält. Schauen Sie in Ihrer E-Mail-Kopie oder im Frontend-Archiv nach, um die genaue E-Mail-Genauigkeit zu erfahren.<br /> Dies ist eine Liste mit dem einzigen Zweck, den Überblick über die E-Mails und die Benutzer auf einfache Weise zu behalten.<br />Sichern Sie immer eine Kopie der verfassten HTML-E-Mail, bevor Sie sie verschicken, wenn Sie sie in Zukunft wiederverwenden möchten.',
	'NEWS_PAGE'					=> 'Sichtbar',
	'HIDE'						=> 'Verstecken',
	'SHOW'						=> 'anzeigen',
	'DELETE_MAIL_SUCCES'		=> 'Newsletter gelöscht',
	'ACP_NEWSOVERVIEW_SEND'		=> 'Newsletter erfolgreich versendet',
	'ACP_NEWSOVERVIEW_SAVED'	=> 'Einstellungen erfolgreich gespeichert',
	
	'SITESPLAT_COM'		        => 'https://sitesplat.com',
	'SITESPLAT_COPY'		    => '&#169; SiteSplat',
	'LICENSE_INFO'		        => 'Eigentum - SiteSplat Alle Rechte vorbehalten',
	'EXTENSION_DEVELOPER'	    => 'Entwickler',
	'ACP_NOTICE_CLOSE'			=> 'Schlie&szlig;en',
	'ACP_NEWS_VERSION'          => '1.0.5',
	'ACP_LOADING'		        => 'Laden... Warten Sie',
	'FORUM_CONTENT'		        => 'Forum Inhalt',
	'EXT_NEWS_DESCRIPTION_PAGE'	=> 'Ein Newsletter-System mit Archiv, wöchentlichem, monatlichem und vielen weiteren Optionen, um Ihren eigenen HTML-Newsletter wie ein Profi zu betreiben!',
	'EXT_NEWS_TASKS_1'			=> 'Newsletter Archiv',
	'EXT_NEWS_TASKS_2'			=> 'Vollständig HTML-fähig',
	'EXT_NEWS_TASKS_3'			=> 'Synchronisierung mit Cron-Aufgaben und kompatibel mit <a href="https://www.phpbb.com/customise/db/extension/cronstatus/">Cron Status</a>',
	'EXT_NEWS_TASKS_4'			=> 'Geplanter Newsletter',
	'EXT_NEWS_TASKS_5'			=> 'Sehen Sie sich die anderen Premium-Addons auf <a href="https://sitesplat.com/phpBB3/marketplace.php">sitesplat.com/marketplace.php</a> an.',
	'EXT_NEWS_TASKS_6'			=> 'phpBB 3.2 ready',

	'NEWS_SUBSCRIBERS_INFO'     => 'Abonnenten und Nachrichten Info',
	'NEWS_TRICKS_TITLE'         => 'Tipps und Tricks',
	'ACP_NEWS_TRICK_EXPLAIN'	=> '<p>Begrenzt Ihr Internetanbieter die Anzahl der E-Mails, die Sie pro Tag versenden können?</p>
									<p><strong>Natürlich tun sie das!</strong></p>
									<p>Jeder ausgehende SMTP-Mailserver unterliegt den E-Mail-Richtlinien eines Anbieters, die stündliche und/oder tägliche E-Mail-Sendebeschränkungen enthalten. Diese Richtlinie bestimmt letztlich, wie viele E-Mails Sie pro Tag versenden können. Nachstehend finden Sie eine Liste der stündlichen und täglichen Sendebeschränkungen für die meisten großen ISPs, Webhosting-Unternehmen und Anbieter kostenloser E-Mail-Adressen.</p>
									<p><strong><a title="E-Mail-Versandbeschränkungen für ISP, Webhosting und kostenlose E-Mail-Anbieter" href="http://group-mail.com/sending-email/email-sending-limits-for-isp-web-hosting-and-free-email-providers/">E-Mail-Versandbeschränkungen von ISP, Webhosting und kostenlosen E-Mail-Anbietern</a></strong></p>
									<p>Wenn Sie versuchen, mehr E-Mails zu versenden, als die stündlichen oder täglichen E-Mail-Versandlimits Ihres Mailservers zulassen, werden Sie feststellen, dass Fehler zurückgegeben werden, nachdem die angegebene Quote erreicht ist, und zwar mit folgendem Inhalt:<em> </em>
									</p>
									<blockquote>
										<p><em>Sie haben Ihre tägliche Sendequote erreicht</em>…</p>
									</blockquote>
									<p>Wenn Sie die täglichen <a title="SMTP-E-Mail-Versandlimits" href="http://group-mail.com/sending-email/email-sending-limits-for-isp-web-hosting-and-free-email-providers/">SMTP-E-Mail-Versandlimits</a> Ihres Providers überschreiten, müssen Sie in der Regel 24 Stunden warten, bevor Sie weitere E-Mails über diesen Server versenden können.</p>
									<p>Aber was sind die stündlichen oder täglichen E-Mail-Versandgrenzen für <em>Ihren</em> E-Mail-Server?</p>
									<ul>
										<li>Das Versandlimit des Google Mail-Servers liegt bei ca. 100-150 E-Mails pro Tag, wenn eine Verbindung zum Server über einen Remote-E-Mail-Client hergestellt wird. Sie können 500 E-Mails pro Tag über den Gmail-SMTP-Server senden, wenn Sie in der Webschnittstelle angemeldet sind.</li>
										<li>Der Comcast Mailserver erlaubt Privatkunden den Versand von 1.000 Nachrichten pro Tag. Comcast Geschäftskunden können 24.000 E-Mails pro Tag über den Comcast Mailserver für ausgehende SMTP-Nachrichten versenden.</li>
										<li>Der Basis-E-Mail-Server von GoDaddy erlaubt nur 250 ausgehende E-Mails pro Tag, aber Sie können <a title="Senden Sie mehr E-Mails, indem Sie SMTP-Relays zu Ihrem GoDaddy-Konto hinzufügen" href="http://group-mail.com/sending-email/how-to-increase-your-godaddy-email-sending-limits/">mehr E-Mails senden, indem Sie SMTP-Relays zu Ihrem GoDaddy-Konto hinzufügen</a>
										</li>
									</ul>
									<p>&nbsp;</p>
									<p>Was soll man also tun, wenn man seinen monatlichen E-Mail-Newsletter an 5.000 eifrige Abonnenten verschicken muss, sein ISP aber ein tägliches Versandlimit von 500 E-Mails pro Tag hat?</p>
									<p><strong>Was können Sie tun, wenn Ihr Mailserver Grenzen hat, die die Größe Ihrer Mailingliste nicht zulassen?</strong>
									</p>
									<p>Wenn Ihr aktueller SMTP-E-Mail-Server die Größe Ihrer E-Mail-Liste oder die Häufigkeit des Versands nicht unterstützt, haben Sie eine Reihe von Möglichkeiten:</p>
									<p style="padding-left: 30px;">1. Wenden Sie sich an den Hoster Ihres Postausgangsservers und fragen Sie, ob er ein Geschäftskonto anbietet, mit dem Sie mehr E-Mails pro Tag versenden können, um Ihr Unternehmen zu unterstützen.</p>
									<p style="padding-left: 30px;">2. Verwenden Sie GroupMails <a title="E-Mail ohne externen SMTP-Mailserver versenden" href="http://group-mail.com/sending-email/sending-email-without-an-external-smtp-mail-server/">Direktversand-Option</a>, mit der Sie Ihren externen SMTP-Server ganz umgehen und E-Mails direkt von Ihrem Computer an Ihre Empfänger senden können, indem Sie GroupMails eigene interne SMTP-Engine verwenden.</p>
									<p style="padding-left: 30px;">3. Verwenden Sie einen ausgehenden SMTP-Dienst wie <a title="SMTP2Go outgoing relay pricing" href="http://groupmail.smtp2go.com">SMTP2Go</a> für die Weiterleitung Ihrer großen E-Mail-Kampagnen.</p>
									<p style="padding-left: 30px;">4. Suchen Sie sich einen Webhosting-Anbieter, dessen tägliches E-Mail-Versandlimit Ihren Anforderungen entspricht.</p>
									<p style="padding-left: 30px;">5. Richten Sie Ihren eigenen <a href="http://www.msexchange.org/tutorials/MF002.html">MS Exchange Server</a> ein und konfigurieren Sie ihn für den SMTP-E-Mail-Versand.</p>
									<p>GroupMail ermöglicht es Ihnen zwar, E-Mail-Listen von <strong>unbegrenzter</strong> Größe zu versenden und zu verwalten; der Erfolg der E-Mail-Zustellung an große Gruppen hängt jedoch letztendlich von den Sendebeschränkungen ab, die in den E-Mail-Versandrichtlinien des von Ihnen verwendeten SMTP-Mailservers festgelegt sind.</p>
									<p><strong>Ähnliche Artikel könnten für Sie interessant sein:</strong>
									</p>
									<p><a title="E-Mail-Versandbeschränkungen von ISPs, Webhosting- und kostenlosen E-Mail-Anbietern" href="http://group-mail.com/sending-email/email-sending-limits-for-isp-web-hosting-and-free-email-providers/">E-Mail-Versandlimits für ISPs, Webhosting und kostenlose E-Mail-Anbieter</a>
									</p>
									<p><a title="Allgemeine E-Mail-Fehlercodebeschreibungen und -behebungen" href="http://group-mail.com/email-error-codes/common-email-error-codes/">Allgemeine E-Mail-Fehlercode-Beschreibungen und -Lösungen</a>
									</p>
									<p><a title="Kostenlose E-Mail-Newsletter und Marketing-Software und -Dienste" href="http://group-mail.com/email-marketing/free-email-newsletter-and-marketing-software-and-services/">Kostenlose E-Mail-Newsletter und Marketing-Software und -Dienste</a>
									</p>
									<p><a title="E-Mail-Einstellungen für die gängigsten E-Mail-Server-Hosts" href="http://group-mail.com/category/email-settings/">E-Mail-Einstellungen für die gängigsten E-Mail-Server-Hosts</a>
									</p>
									<p><a title="Schritt-für-Schritt-Anleitung für die Einrichtung und den Versand von E-Mails" href="http://group-mail.com/getting-started-with-groupmail/step-by-step-guide-for-email-setup-and-delivery/">Schritt-für-Schritt-Anleitung für die Einrichtung und den Versand von E-Mails</a>
									</p>
									<p>&nbsp;</p>
									<hr>
									<p></p>',
	
	'EXT_NEWS_TUTORIALS_TITLE'  => 'Anleitungen',
	'EXT_NEWS_TUTORIALS_EXPLAIN'=> '<li><p>Templates</p>
					<ul>
					<li><a href="http://htmlemailboilerplate.com/" target="_blank"><strong>HTML f&uuml;r Email - Boilerplate</strong></a>: Ein guter <strong>Startpunkt</strong> für die Codierung von E-Mails.</li>
					<li><a href="http://www.campaignmonitor.com/templates/" target="_blank"><strong>Vorlage der Templates</strong></a>: Template builder + kostenlos herunterladbare  templates</li>
					</ul>
					</li>
					
					<li><p>Anleitungen &amp; Guides</p>

					<ul>
					<li><a href="http://kb.mailchimp.com/article/how-to-code-html-emails" target="_blank"><strong>Wie man HTML-E-Mails codiert (Mailchimp)</strong></a>: Wie HTML-E-Mails funktionieren, grundlegende Konzepte, bewährte Verfahren, Tipps und Tricks</li>
					<li><a href="http://www.smashingmagazine.com/2010/01/19/design-and-build-an-email-newsletter-without-losing-your-mind/" target="_blank"><strong>Entwerfen und Erstellen von E-Mail-Newslettern, ohne den Verstand (und die Seele) zu verlieren</strong></a>:  Informationen, die Sie benötigen, um einen HTML-Newsletter zu planen, zu entwerfen und zu erstellen, der gut dargestellt wird</li>
					<li><a href="http://mailchimp.com/resources/guides/email-marketing-field-guide/html/" target="_blank"><strong>E-Mail-Marketing-Handbuch (Mailchimp)</strong></a></li>
					<li><a href="http://mattmedia.net/2007/08/23/8-html-email-tips-i-wish-i-knew-sooner/" target="_blank"><strong>8 HTML-E-Mail-Tipps, die ich gerne früher gekannt hätte</strong></a></li>
					<li><a href="http://www.campaignmonitor.com/css/" target="_blank"><strong>Das ultimative Handbuch</a>: Von Kampagnen Monitor</strong></li>
					<li><a href="http://css-tricks.com/using-css-in-html-emails-the-real-story/" target="_blank"><strong>CSS-Tricks: CSS in HTML-E-Mails verwenden</strong></a>: Einige "Ich habe es ja gesagt" Anmerkungen und Tipps zu HTML f&uuml;r E-Mails und CSS.</li>
					</ul>
					</li>
					
					<li><p>Prüfung</p>

					<ul>
					<li><a href="http://www.emailonacid.com/" target="_blank"><strong>E-Mail auf Acid testen</strong></a>: Kostenlose und kostenpflichtige Tests</li>
					<li><a href="http://litmus.com/" target="_blank"><strong>Litmus</strong></a></li>
					</ul>
					</li>
					
					<li><p>Andere Quellen</p>

					<ul>
					<li><a href="http://www.campaignmonitor.com/resources/will-it-work/email-clients/" target="_blank"><strong>Beliebte E-Mail-Clients von Campaign Monitor</strong></a></li>
					</ul>
					</li>',
	
	
	'NEWSLETTER_NOTICE'			=> '<div class="phpinfo"><p>Die Einstellungen für diese Erweiterung befinden sich unter <strong>%1$s &#187; %2$s &#187; %3$s</strong>. <br />Bitte beachten Sie, dass bei der Ersteinrichtung bei der Einstellung des Zeitraums (z.B. wöchentlich) und des Formats (HTML) die erste automatische Newsletter-Übersicht sofort nach dem Speichern der Einstellungen versendet wird! <br />Dies ist notwendig, um die Synchronisation zu starten. Aus diesem Grund sollten Sie vor dem Einsatz der Erweiterung ein Testboard verwenden, um sicherzustellen, dass das Endergebnis des Newsletters dem gewünschten Aussehen entspricht.</p></div>',
	'SS_HELPER_NOTY'			=> 'SiteSplat BBcore existiert nicht!<br />Laden Sie das <a href="https://sitesplat.com" target="_blank">BBcore</a> herunter und kopieren Sie den BBcore-Ordner in Ihren Sitesplat-Erweiterungsordner.',
));

// Description of Donations extension
$lang = array_merge($lang, array(
	'DESCRIPTION_PAGE'		=> 'Beschreibung',
	'DESCRIPTION_NOTICE'	=> 'Anmerkung zur Erweiterung',
	'ext_details' => array(
		'details' => array(
			'DESCRIPTION_1'	=> 'HTML-Newsletter',
			'DESCRIPTION_2'	=> 'Gruppe auswählen',
			'DESCRIPTION_3'	=> 'Wöchentliche / monatliche Nachrichtenübersicht',
			'DESCRIPTION_4'	=> 'Sofort oder im Stapel senden',
			'DESCRIPTION_5'	=> 'Übersicht Abonnenten',
		),
		'note' => array(
			'NOTICE_1'		=> '<a href="https://github.com/ForumHulp/htmlemail" target="_blank">HTML-E-Mail-Erweiterung</a> ist erforderlich, um die HTML-Einstellungen zu aktivieren.',
			'NOTICE_2'		=> 'phpBB 3.2 ready'
		)
	)
));