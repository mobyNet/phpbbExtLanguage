<?php

/**
 * phpBB Extension - marttiphpbb showphpbbevents
 * @copyright (c) 2014 - 2020 marttiphpbb <info@martti.be>
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

if (!defined('IN_PHPBB')) {
	exit;
}

if (empty($lang) || !is_array($lang)) {
	$lang = [];
}

$lang = array_merge($lang, [
'MARTTIPHPBB_SHOWPHPBBEVENTS_SHOW'                => 'Anzeigen',
'MARTTIPHPBB_SHOWPHPBBEVENTS_SHOW_EXPLAIN'        => 'phpBB-Events anzeigen',
'MARTTIPHPBB_SHOWPHPBBEVENTS_HIDE'                => 'Verstecken',
'MARTTIPHPBB_SHOWPHPBBEVENTS_HIDE_EXPLAIN'        => 'phpBB-Events ausblenden',
'MARTTIPHPBB_SHOWPHPBBEVENTS_PHP_EVENT_NAME'      => 'PHP Event',
'MARTTIPHPBB_SHOWPHPBBEVENTS_PHP_EVENT_COUNT'     => 'Z�hlen',
'MARTTIPHPBB_SHOWPHPBBEVENTS_SINCE'               => 'Schon seit',
'MARTTIPHPBB_SHOWPHPBBEVENTS_FILENAME'            => 'Dateiname',
]);