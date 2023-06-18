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
'PRIMEPOSTREVISIONS_VIEW'                      => 'View post history',
// Text for the link to view the revision history
'POSTREVISIONS_ICON_HELP'                      => 'These are the differences VS this revision above',


// Viewing revisions
'PRIMEPOSTREVISIONS_VIEWING'                   => 'Viewing post history',
'PRIMEPOSTREVISIONS_VIEWING_EXPLAIN'           => 'This page shows all versions of the post, starting with the most current version.',
'PRIMEPOSTREVISIONS_TITLE'                     => 'Viewing post history',
'PRIMEPOSTREVISIONS_FIRST'                     => 'Original post',
'PRIMEPOSTREVISIONS_FINAL'                     => 'Current post',
'PRIMEPOSTREVISIONS_COUNT'                     => 'Revision %d',
#'PRIMEPOSTREVISIONS_INFO'			                    => 'Edited by %1$s on %2$s.',
'PRIMEPOSTREVISIONS_EDIT_BY'                   => 'Edited by',
'PRIMEPOSTREVISIONS_NO_SUBJECT'                => '[no subject]',
'PRIMEPOSTREVISIONS_COMPARE'                   => 'Compare',
'PRIMEPOSTREVISIONS_VIEW_DENIED'               => 'You lack the necessary permissions to view these post revisions.',

// Delete a revision
'PRIMEPOSTREVISIONS_DELETE'                    => 'Delete Revision',
'PRIMEPOSTREVISIONS_DELETE_CONFIRM'            => 'Are you sure you want to delete this revision?',
'PRIMEPOSTREVISIONS_DELETE_DENIED'             => 'You lack the necessary permissions to delete this revision.',
'PRIMEPOSTREVISIONS_DELETE_FAILED'             => 'An error occurred while attempting to delete the revision.',
'PRIMEPOSTREVISIONS_DELETE_SUCCESS'            => 'The revision has been successfully removed.',
'PRIMEPOSTREVISIONS_DELETE_INVALID'            => 'No post revision has been selected for removal.',

// Delete all revisions
'PRIMEPOSTREVISIONS_DELETES'                    => 'Delete selected revisions',
'PRIMEPOSTREVISIONS_DELETES_CONFIRM'            => 'Are you sure you want to delete these revisions?',
'PRIMEPOSTREVISIONS_DELETES_DENIED'             => 'You lack the necessary permissions to delete these revisions.',
'PRIMEPOSTREVISIONS_DELETES_FAILED'             => 'An error occurred while attempting to delete these revisions.',
'PRIMEPOSTREVISIONS_DELETES_SUCCESS'            => 'The revisions have been successfully removed.',
'PRIMEPOSTREVISIONS_DELETES_INVALID'            => 'No post revisions have been selected for removal.',

// Restore a revision
'PRIMEPOSTREVISIONS_RESTORE'                    => 'Restore Revision',
'PRIMEPOSTREVISIONS_RESTORE_CONFIRM'            => 'Are you sure you want to restore this revision?',
'PRIMEPOSTREVISIONS_RESTORE_DENIED'             => 'You lack the necessary permissions to restore this revision.',
'PRIMEPOSTREVISIONS_RESTORE_FAILED'             => 'An error occurred while attempting to restore the revision.',
'PRIMEPOSTREVISIONS_RESTORE_SUCCESS'            => 'The post has been successfully restored.',
'PRIMEPOSTREVISIONS_RESTORE_INVALID'            => 'No post revision has been selected for restoration.',

)
);