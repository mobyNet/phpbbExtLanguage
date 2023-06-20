<?php
/**
 *
 * Mass Notification. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019, Jakub Senko
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB')) {
	exit;
}

if (empty($lang) || !is_array($lang)) {
	$lang = array();
}

$lang = array_merge($lang, array(
'MASSNOTIFICATION_DESC'              => 'Hier können Sie eine Board-Benachrichtigung entweder an alle Ihre Benutzer oder an bestimmte Benutzer oder Gruppen senden.',

'COMPOSE'                            => 'Massenbenachrichtigung verfassen',
'ALL_USERS'                          => 'Alle Benutzer',
'SEND_TO_GROUP'                      => 'An Gruppe senden',
'SEND_TO_USERS'                      => 'An Benutzer senden',
'SEND_TO_USERS_EXPLAIN'              => 'Wenn Sie hier einen Namen eingeben, wird die oben ausgewählte Gruppe überschrieben. Geben Sie jeden Benutzernamen in eine neue Zeile ein.',
'TITLE'                              => 'Titel der Benachrichtigung',
'MESSAGE_EXPLAIN'                    => 'Fassen Sie sich kurz, vorzugsweise unter 150 Zeichen. Sie können HTML verwenden.',
'URL'                                => 'Weiterleitungs-URL',
'URL_EXPLAIN'                        => 'Geben Sie die URL an, zu der der Benutzer nach dem Anklicken der Benachrichtigung weitergeleitet wird.',
'AUTHOR_EXPLAIN'                     => 'Geben Sie den Autor der Benachrichtigung an. Leer lassen für generische Benachrichtigung ohne Autor.',
'SEND_NOTIFICATION'                  => 'Benachrichtigung senden',

'NO_NOTIFICATION_TITLE'              => 'Sie müssen den Titel der Meldung angeben.',
'NO_NOTIFICATION_MESSAGE'            => 'Sie müssen die Nachricht der Benachrichtigung angeben.',
'NO_NOTIFICATION_AUTHOR'             => 'Autor existiert nicht.',

'NOTIFICATION_SEND'                  => 'Ihre Benachrichtigung wurde gesendet.',
));