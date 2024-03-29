<?php
/**
 *
 * Board Rules extension for the phpBB Forum Software package.
 * German (Casual Honorifics) translation by Talk19Zehn (www.ongray-design.de), extension version 2.1.2
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
// Settings page
'ACP_BOARDRULES'                                 => 'Board-Regeln',
'ACP_BOARDRULES_SETTINGS'                        => 'Einstellungen',
'ACP_BOARDRULES_SETTINGS_EXPLAIN'                => 'Hier kannst du die wichtigsten Einstellungen für die Board-Regeln vornehmen.',
'ACP_BOARDRULES_ENABLE'                          => 'Board-Regeln aktivieren',
'ACP_BOARDRULES_HEADER_LINK'                     => 'Link zu den Board-Regeln in der Navigation anzeigen',
'ACP_BOARDRULES_FONT_ICON'                       => 'Board-Regeln | Font Awesome Symbol',
'ACP_BOARDRULES_FONT_ICON_EXPLAIN'               => 'Gebe hier den Namen eines <a href="%s" target="_blank">Font Awesome</a> Icon ein, um dieses zu verwenden oder verwende das voreingestellte Icon (Font Awesome Symbol).',
'ACP_BOARDRULES_FONT_ICON_INVALID'               => 'Der angegebene Name für das Font Awesome Symbol ist fehlerhaft.',
'ACP_BOARDRULES_AT_REGISTRATION'                 => 'Zustimmungspflicht für neue Mitglieder',
'ACP_BOARDRULES_AT_REGISTRATION_EXPLAIN'         => 'Ein Abschnitt für die Board-Regeln wird den Nutzungsbedingungen hinzugefügt und erfordert eine aktive Zustimmung beim Registrierungsvorgang im Board.',
'ACP_BOARDRULES_NOTIFY'                          => 'Mitglieder erinnern',
'ACP_BOARDRULES_NOTIFY_EXPLAIN'                  => 'Allen Registrierten eine Mitteilung über die Änderung der Board-Regeln zusenden. Das Versenden der Mitteilung kann einige Minuten dauern.',
'ACP_BOARDRULES_NOTIFY_CONFIRM'                  => 'Bist du dir sicher, dass du diese Nachricht senden möchtest?',
'ACP_BOARDRULES_SETTINGS_CHANGED'                => 'Einstellungen der Board-Regeln wurden geändert.',
'ACP_BOARDRULES_LIST_STYLE'                      => 'Board rules list style',
'ACP_BOARDRULES_LIST_STYLE_EXPLAIN'              => 'Board rules are presented in a list format. Decide if you want rule and category items to be preceded by ordered alpha-numeric ordinals (this is the default behavior), bullets or nothing.',
'ACP_BOARDRULES_LIST_STYLE_ORDERED'              => 'Ordered alpha-numeric',
'ACP_BOARDRULES_LIST_STYLE_BULLET'               => 'Bullet',
'ACP_BOARDRULES_LIST_STYLE_NONE'                 => 'None',

// Manage page
'ACP_BOARDRULES_MANAGE'                          => 'Regeln verwalten',
'ACP_BOARDRULES_MANAGE_EXPLAIN'                  => 'Hier kannst du Kategorien und Regeln hinzufügen, ändern und löschen. Kategorien sind Regelblöcke mit ähnlichen Regeln. Jede Kategorie kann unendlich viele Regeln enthalten.',
'ACP_BOARDRULES_LANGUAGE_EXPLAIN'                => 'Choose a language for your Board Rules. Users will see the rules you create for their preferred language. If you do not create any rules in their preferred language, then users will see rules created using the board’s default language.',
'ACP_BOARDRULES_CATEGORY'                        => 'Regel-Kategorie',
'ACP_BOARDRULES_RULE'                            => 'Regel',
'ACP_BOARDRULES_SELECT_LANGUAGE'                 => 'Sprache auswählen',
'ACP_BOARDRULES_CREATE_RULE'                     => 'Regel erstellen',
'ACP_BOARDRULES_CREATE_RULE_EXPLAIN'             => 'Hier kannst du eine neue Regel anlegen, die Mitgliedern angezeigt wird.',
'ACP_BOARDRULES_EDIT_RULE'                       => 'Regel bearbeiten',
'ACP_BOARDRULES_EDIT_RULE_EXPLAIN'               => 'Hier kannst du eine bestehende Regel anpassen bzw. ändern.',
'ACP_RULE_SETTINGS'                              => 'Regel-Einstellungen',
'ACP_RULE_PARENT'                                => 'Übergeordnete Regel',
'ACP_RULE_NO_PARENT'                             => 'Nicht übergeordnet',
'ACP_RULE_TITLE'                                 => 'Regel-Bezeichnung',
'ACP_RULE_TITLE_EXPLAIN'                         => 'Regelbezeichnungen werden nur bei Kategorien auf der Board-Regel-Seite angezeigt. Regelbezeichnungen dienen auch zum Auffinden und Verwalten innerhalb der Board-Regeln im Administrationsbereich.',
'ACP_RULE_ANCHOR'                                => 'Regel-Anker',
'ACP_RULE_ANCHOR_EXPLAIN'                        => 'Regel-Anker sind optional und werden als Linkziele für Regeln genutzt. Sie müssen einzigartig sein, dürfen keine Sonderzeichen (Leerstellen, HTML-Zeichen und/oder Umlaute) enthalten und dürfen nicht mit einer Ziffer beginnen, da sie in der URL bereits voreingestellt genutzt werden.',
'ACP_RULE_MESSAGE'                               => 'Regel-Text',
'ACP_RULE_MESSAGE_EXPLAIN'                       => 'Der Regel-Text wird für jede Regel angezeigt, die keine Regel-Kategorie ist.',
'ACP_RULE_MESSAGE_DISABLED'                      => 'Dies ist eine Regel-Kategorie. Der Regel-Text-Editor ist deshalb nicht verfügbar.',
'ACP_ADD_RULE'                                   => 'Neue Regel erstellen',
'ACP_DELETE_RULE_CONFIRM' => array(
0                                                => 'Bist du dir sicher, dass du diese Regel entfernen möchtest?',
1                                                => 'Bist du dir sicher, dass du diese Regel-Kategorie entfernen möchtest?<br />Warnung: Das Entfernen einer Regel-Kategorie wird auch alle darin enthaltenen Regeln löschen.',
),
'ACP_RULE_ADDED'                                 => 'Regel hinzugefügt.',
'ACP_RULE_DELETED'                               => 'Regel gelöscht.',
'ACP_RULE_EDITED'                                => 'Regel bearbeitet.',
'ACP_RULE_TITLE_EMPTY'                           => 'Für die Regel muss ein Regel-Name vergeben werden.',

// Nested set exception messages (only appears in PHP error logging)
// Translators: Feel free to not translate these language strings
'RULES_NESTEDSET_LOCK_FAILED_ACQUIRE'            => 'Die Board-Regeln konnten nicht in die Tabelle geschrieben werden, da ein anderer Prozess dies vermutlich verhindert und angehalten hat. Die Sperren werden nach einer Zeitüberschreitung von 1 Stunde aufgehoben.',
'RULES_NESTEDSET_INVALID_ITEM'                   => 'Die angeforderte Regel existiert nicht.',
'RULES_NESTEDSET_INVALID_PARENT'                 => 'Die angeforderte Regel hat kein übergeordnetes Element.',
));