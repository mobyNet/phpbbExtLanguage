<?php
/**
 *
 * HTML email extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2015 ForumHulp.com <http://forumhulp.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
'FH_HELPER_NOTICE'        => 'Forumhulp helper Anwendung existiert nicht!<br />Laden Sie <a href="https://github.com/ForumHulp/helper" target="_blank">forumhulp/helper</a> herunter und kopieren Sie den helper Ordner in Ihren forumhulp Erweiterungsordner.',
'HTML_EMAIL_NOTICE'       => '<div class="phpinfo"><p class="entry">Einstellungen für diese Erweiterung sind nicht notwendig.<br />Sie können sie für Emails auf der Geburtstag Erweiterung verwenden, indem Sie "use html in email" in Board Funktionen einschalten. Wenn Sie html in anderen Mails verwenden wollen, müssen Sie Messenger mitteilen, dass er html-E-Mails senden soll, indem Sie Messenger mit $messenger->set_mail_html(true) konfigurieren. Aktualisieren Sie Ihre Mail-Templates nach Belieben.</p></div>',
'DELETE_DATA_NOTICE'      => '<div style="width:80%;margin:20px auto;"><p style="text-align:left;">Nicht alle Dateien werden ersetzt! Bitte ersetzen Sie die im Admin-Protokoll genannte(n) Datei(en) von Hand</p></div>',
'ENABLE_DATA_NOTICE'      => '<div style="width:80%;margin:20px auto;"><p style="text-align:left;"><br />Allerdings werden nicht alle Updates ordnungsgemäß durchgeführt, weil Dateiberechtigungen oder fehlende Dateien. Siehe Admin-Log für eine Übersicht.<br /><br />Bitte aktualisieren Sie die Dateien von Hand, um alle Funktionen nutzen zu können !</p></div>'
));