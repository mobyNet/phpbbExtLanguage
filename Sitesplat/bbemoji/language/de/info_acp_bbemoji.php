<?php
/**
*
* @package BBemoji
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
'ACP_BBEMOJI'                   => 'Themensymbole - BBemoji Aktiviert',
'ACP_BBEMOJI_TITLE_EXPLAIN'     => 'HINWEIS: Sie können den Themenbereich BBemoji pro Forum aktivieren/deaktivieren (standardmäßig global deaktiviert), über ACP > FORUMS (Option "Forum bearbeiten"). <br />Auch die Themensymbole können pro Forum aktiviert/deaktiviert werden. ACP > FORUMS (Option "Forum bearbeiten"). Viel Spaß!',
'SS_HELPER_NOTY'                => 'SiteSplat BBcore existiert nicht!<br />Laden Sie das <a href="http://sitesplat.com" target="_blank">BBcore</a> herunter und kopieren Sie den BBcore-Ordner in Ihren Sitesplat-Erweiterungsordner.',
'BBEMOJI_NOTICE'                => '<div class="phpinfo"><p>Geben Sie auf der Beitragsseite oder im Schnellantwortformular ein Semikolon ein, z.B. dieses ":", damit ein automatisches Vorschlagsmenü angezeigt wird. <br />Die Emoji können auf Benutzerebene über <strong>UCP &#187; Board-Einstellungen &#187; Anzeigeoptionen bearbeiten &#187; "Smilies als Bilder anzeigen"</strong><br />Hinweis: Emoji sind auch automatisch für <strong>Themensymbole</strong> aktiviert (sie können über ACP, Beiträge, Themensymbole hinzugefügt/bearbeitet werden).<br>Emoji sind auch für "Beitragsthemen" verfügbar. Sie sind standardmäßig deaktiviert, können aber unter ACP &#187; FORUMS &#187; (Forum bearbeiten, indem Sie auf das Zahnradsymbol klicken) &#187; "BBemoji im Betreff aktivieren" aktiviert werden.<br> Andere Premium-Erweiterungen wie <strong>"BBstatus"</strong>, <strong>"BBgreetings"</strong>, <strong>"BBreaction"</strong> usw. unterstützen ebenfalls BBemoji, wenn Sie sie installiert haben.</p></div>',
'ICON_ADD'                      => 'Neues Icon hinzufügen',
'ICON'                          => 'Benutzerdefiniertes Themensymbol',
'ICON_EXPLAIN'                  => 'Fügen Sie hier den Pfad für Ihr benutzerdefiniertes Symbol relativ zum phpBB-Stammverzeichnis hinzu.',
'ICON_EMOJI'                    => 'Emoji Icon',
'ICON_EMOJI_EXPLAIN'            => 'Beginnen Sie mit der Eingabe eines Semikolons, um die Liste der Emoji aus dem automatischen Vorschlagsmenü zu erhalten',
'ICON_ADDED'                    => 'Ein neues Icon wurde hinzugefügt',
'ICON_NOT_EXIST'                => 'Icon existiert nicht',

'ENABLE_SUBJECT_EMOJI'          => 'BBemoji im Betreff aktivieren',
'ENABLE_SUBJECT_EMOJI_EXPLAIN'  => 'Aktivieren/Deaktivieren von Emoji im Betreff eines Themas. Es gibt einige Überlegungen zu berücksichtigen und ein "kluger" Admin sollte unbedingt über die Auswirkungen von Emoji im Titel lesen. Hier sind einige aktuelle, gute Artikel: <a href="https://yoast.com/ask-yoast-emojis-seo/" target="_blank">Emojis und SEO</a> und: <a href="https://www.wordtracker.com/academy/seo/page-optimization/will-an-emoji-in-the-description-harm-my-rankings" target="_blank">Wird ein Emoji in der Beschreibung meinem Ranking schaden?</a>.',
	
// BBreaction
'ACP_BBREACTION_EMOJI'          => 'BBemoji',
'ACP_BBREACTION_EMOJI_EXPLAIN'  => 'Wählen Sie ein BBemoji als Symbol. Beginnen Sie mit der Eingabe von :.',
));
