<?php
/**
 *
 * @package phpBB Extension - Who Visited This Topic
 * @copyright (c) 2016 dmzx - http://www.dmzx-web.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
'WHOVISITEDTHISTOPIC_TOPIC_SETTINGS'                   => 'Aktivieren Sie, Wer dieses Thema in Themen besucht hat',
'WHOVISITEDTHISTOPIC_TOPIC_SETTINGS_EXPLAIN'           => 'Dies zeigt die Personen, die dieses Thema besucht haben, unter den Themen an.',
'WHOVISITEDTHISTOPIC_COUNT_SETTINGS'                   => 'Aktivieren Sie, Wer hat dieses Thema besucht (Beitrag Z&auml;hler)',
'WHOVISITEDTHISTOPIC_COUNT_SETTINGS_EXPLAIN'           => 'Dadurch wird der Z&auml;hler f&uuml;r die Besucher dieses Themas in den Themen angezeigt.',
'WHOVISITEDTHISTOPIC_SHOW_AVATAR'                      => 'Aktivieren Sie, Wer dieses Thema besucht hat die Avatare.',
'WHOVISITEDTHISTOPIC_SHOW_AVATAR_EXPLAIN'              => 'Dadurch werden die Avatare f&uuml;r "Wer hat dieses Thema besucht" unter den Themen angezeigt.',
'WHOVISITEDTHISTOPIC_MEMBERPAGE_SETTINGS'              => 'Aktivieren Sie, Wer hat dieses Thema besucht Ansicht im Profil',
'WHOVISITEDTHISTOPIC_MEMBERPAGE_SETTINGS_EXPLAIN'      => 'Dies zeigt die Person, die dieses Thema besucht haben, im Profil an.',
'WHOVISITEDTHISTOPIC_SETTING'                          => 'Legen Sie den Wert f&uuml;r Wer hat dieses Thema besucht in Themen fest, Wieviel member willst zu sehen',
'WHOVISITEDTHISTOPIC_SETTING_EXPLAIN'                  => 'Wert einstellbar von 2 bis 255 Mitgliedern. <em>Die Standardeinstellung ist 10.</em>',
'WHOVISITEDTHISTOPIC_VISIT_SETTING'                    => 'Legen Sie den Wert für "Zuletzt besuchte Themen" fest, Ansicht im Profil',
'WHOVISITEDTHISTOPIC_VISIT_SETTING_EXPLAIN'            => 'Wert einstellbar von 2 bis 255 Mitgliedern. <em>Die Standardeinstellung ist 10.</em>',
'WHOVISITEDTHISTOPIC_DISABLED_TOPIC'                   => 'Deaktiviert Setzen Sie "Wer hat dieses Thema in Themen besucht Anzahl der Member" Auf "Ja", um einen Wert einzugeben',
'WHOVISITEDTHISTOPIC_DISABLED_MEMBERPAGE'              => 'Deaktiviert Setzen Sie "Wer hat dieses Thema besucht Anzahl der Themen im Profil" Auf "Ja", um einen Wert einzugeben',
'WHOVISITEDTHISTOPIC_SETTINGS_EXPLAIN'                 => 'Wechseln Sie zur Registerkarte <em><strong>Wer hat dieses Thema besucht</strong></em> im Abschnitt "Gruppenberechtigungen", um die Berechtigungen f&uuml;r jede Gruppe anzupassen.',
));