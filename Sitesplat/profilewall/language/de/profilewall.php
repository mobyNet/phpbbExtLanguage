<?php
/**
 *
 * Profile Wall
 * @copyright (c) 2015 SiteSplat All rights reserved
 * @license Proprietary
 *
 */

if (!defined('IN_PHPBB')) {
	exit;
}

if (empty($lang) || !is_array($lang)) {
	$lang = array();
}

$lang = array_merge($lang, array(
'PROFILE_COMMENT'               => 'Prifilnachricht',
'PROFILE_COMMENTS'              => 'Profilnachrichten',
'XS_COMMENT'                    => 'Nachrichten',
'XS_REPLIES'                    => 'Antworten',

'WALL'                          => 'Nachrichten',

'MESSAGE_NOT_EXISTS'            => 'Diese Nachricht existiert nicht.',
'NO_POST_PERMISSION'            => 'Sieht so aus, als hätten Sie keine Berechtigung zum erstellen.',
'INFOMSG'                       => 'Auf gehts.',

'EDIT_NO_PERMISSION'            => 'Sie haben keine Berechtigung, diesen Kommentar zu bearbeiten.',
'EDIT_NO_POSTED_DATA'           => 'Es wurden keine Daten zum Bearbeiten angegeben.',
'SUCCESSFUL_EDIT'               => 'Nachricht wurde erfolgreich bearbeitet!',
'SUCCESSFUL_ADDED'              => 'Nachricht wurde erfolgreich hinzugefügt!',
'EDIT_GET_MUST_AJAX'            => 'Das Abrufen der Nachricht zur Bearbeitung muss über AJAX erfolgen.',
'MESSAGE_NOT_EXISTS'            => 'Diese Nachricht existiert nicht',
'MESSAGE_TO_SHORT'              => 'Diese Nachricht ist zu kurz.',

'POST_COMMENT'                  => 'Kommentar erstellen',
'RESTORE'                       => 'Wiederherstellen',
'SOFT_DELETED'                  => 'vorläufig gelöscht',

'AJAX_ISSUE'                    => 'Es gab ein AJAX-Problem :-|',

'IS_SOFT_DELETED'               => 'Dieser Kommentar wurde vorläufig gelöscht.',
'IS_EDITED'                     => 'Diese Nachricht wurde bearbeitet.',
'S_DEL'                         => 'vorläufig gelöscht',
'S_RESTORE'                     => 'vorläufig gelöschten Kommentar wiederherstellen',
'S_DEL_CONFIRM'                 => 'Möchten Sie diesen Kommentar wirklich vorläufig löschen? Beachten Sie, dass der Kommentar für die Moderatoren des Boards weiterhin sichtbar ist',
'S_RESTORE_CONFIRM'             => 'Möchten Sie diesen Kommentar wirklich wiederherstellen?',
'DELETE_NO_PERMISSION'          => 'Sie haben keine Berechtigung zum Löschen von Kommentaren.',

'LIKE'                          => 'Sie müssen diesen Kommentar Liken oder Antworten ',
'LIKE_OWN_POST_ERROR'           => 'Sie können Ihren eigenen Beitrag nicht Liken/Disliken',
'LIKE_LIKE_TIME_ERROR'          => 'Du kannst einen Beitrag nicht so schnell Liken - Disliken',
'LIKE_DISLIKE_REMOVE_INFO'      => 'Um Ihr Dislike zu entfernen, klicken Sie auf den Button Dislike.',
'LIKE_LIKE_REMOVE_INFO'         => 'Um dein Like zu entfernen, klicke auf den Like-Button.',
'LIKE_POST_NO_AUTH'             => 'Sie haben keine Berechtigung, diesen Beitrag zu Liken/Disliken.',
'LIKE_MODE_ERROR'               => 'Modus existiert nicht',
'LIKE_POST_ERROR'               => 'Beitrag existiert nicht',
'LIKES_REMOVED'                 => 'Like entfernen',
'LIKES_GIVEN'                   => 'Like vergeben',

'PROFILE_RETURN'                => 'Zurück zu den Benutzer Profile',
));