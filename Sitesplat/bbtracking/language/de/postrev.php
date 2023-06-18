<?php
/**
 *
 * BBtracking
 *
 * @copyright (c) 2018 Ken F. Innes IV <https://www.absoluteanime.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * @copyright (c) 2017, Sitesplat
 * @license private
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
// Viewing posts
'PRIMEPOSTREVISIONS_VIEW'                      => 'Beitrag Historie anzeigen',
// Text für den Link zur Anzeige der  Historie Revision 
'POSTREVISIONS_ICON_HELP'                      => 'Dies sind die Unterschiede zwischen VS und der obigen Revision',


// Viewing revisions
'PRIMEPOSTREVISIONS_VIEWING'                   => 'Beitrag Verlauf anzeigen',
'PRIMEPOSTREVISIONS_VIEWING_EXPLAIN'           => 'Auf dieser Seite werden alle Versionen des Beitrags angezeigt, beginnend mit der aktuellsten Version.',
'PRIMEPOSTREVISIONS_TITLE'                     => 'Beitragsverlauf anzeigen',
'PRIMEPOSTREVISIONS_FIRST'                     => 'Original Beitrag',
'PRIMEPOSTREVISIONS_FINAL'                     => 'Atueller Beitrag',
'PRIMEPOSTREVISIONS_COUNT'                     => 'Revision %d',
#'PRIMEPOSTREVISIONS_INFO'			                    => 'Edited by %1$s on %2$s.',
'PRIMEPOSTREVISIONS_EDIT_BY'                   => 'Bearbeitet von',
'PRIMEPOSTREVISIONS_NO_SUBJECT'                => '[kein Betreff]',
'PRIMEPOSTREVISIONS_COMPARE'                   => 'Vergleiche',
'PRIMEPOSTREVISIONS_VIEW_DENIED'               => 'Sie haben nicht die erforderlichen Berechtigungen, um diese Beitrag Revision zu sehen.',

// Delete a revision
'PRIMEPOSTREVISIONS_DELETE'                    => 'Revision l&ouml;schen',
'PRIMEPOSTREVISIONS_DELETE_CONFIRM'            => 'Sind Sie sicher, dass Sie diese Revision löschen wollen?',
'PRIMEPOSTREVISIONS_DELETE_DENIED'             => 'Sie haben nicht die erforderlichen Rechte, um diese Revision zu löschen.',
'PRIMEPOSTREVISIONS_DELETE_FAILED'             => 'Beim Versuch, die Revision zu löschen, ist ein Fehler aufgetreten.',
'PRIMEPOSTREVISIONS_DELETE_SUCCESS'            => 'Die Revision wurde erfolgreich entfernt.',
'PRIMEPOSTREVISIONS_DELETE_INVALID'            => 'Es wurde keine Beitragsrevision zur Entfernung ausgewählt.',

// Delete all revisions
'PRIMEPOSTREVISIONS_DELETES'                    => 'Ausgewählte Revisionen löschen',
'PRIMEPOSTREVISIONS_DELETES_CONFIRM'            => 'Sind Sie sicher, dass Sie diese Revisionen löschen wollen?',
'PRIMEPOSTREVISIONS_DELETES_DENIED'             => 'Sie verfügen nicht über die erforderlichen Berechtigungen, um diese Revisionen zu löschen.',
'PRIMEPOSTREVISIONS_DELETES_FAILED'             => 'Beim Versuch, diese Revisionen zu löschen, ist ein Fehler aufgetreten.',
'PRIMEPOSTREVISIONS_DELETES_SUCCESS'            => 'Die Revisionen wurden erfolgreich entfernt.',
'PRIMEPOSTREVISIONS_DELETES_INVALID'            => 'Es wurden keine Revisionen zur Entfernung ausgewählt.',

// Restore a revision
'PRIMEPOSTREVISIONS_RESTORE'                    => 'Revision wiederherstellen',
'PRIMEPOSTREVISIONS_RESTORE_CONFIRM'            => 'Sind Sie sicher, dass Sie diese Revision wiederherstellen wollen?',
'PRIMEPOSTREVISIONS_RESTORE_DENIED'             => 'Sie verfügen nicht über die erforderlichen Berechtigungen, um diese Revision wiederherzustellen.',
'PRIMEPOSTREVISIONS_RESTORE_FAILED'             => 'Beim Versuch, die Revision wiederherzustellen, ist ein Fehler aufgetreten.',
'PRIMEPOSTREVISIONS_RESTORE_SUCCESS'            => 'Der Beitrag wurde erfolgreich wiederhergestellt.',
'PRIMEPOSTREVISIONS_RESTORE_INVALID'            => 'Es wurde keine Revision für die Wiederherstellung ausgewählt.',

)
);