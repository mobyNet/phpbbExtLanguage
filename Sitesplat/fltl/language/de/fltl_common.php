<?php
/**
 *
 * Fancy Lazy Topics Loader
 *
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
'FLTL'                              => 'Fancy Lazy Topics loader',
'FLTL_EXPLAIN'                      => 'Scrollen Sie nach unten, für weitere Themen',
'FLTL_BY'                           => '&nbsp;&#45;&nbsp;By&nbsp;',
'FLTL_LIMIT'                        => 'Anzuzeigende Beiträge',
'FLTL_LIMIT_EXPLAIN'                => 'Stellen Sie die Anzuzeigende Beiträge ein (4 Standart)',

'FLTL_TIME'                         => 'Abruf der Themen',
'FLTL_TIME_EXPLAIN'                 => 'Legen Sie die Anzahl in Tagen fest, wo die Themen aus der Datenbank abgerufen werden sollen. 0 deaktiviert das Limit.',

'FLTL_TYPE'                         => 'Reihenfolge der Beiträge',
'FLTL_TYPE_EXPLAIN'                 => 'Zeigt den ersten oder letzten Beitrag der letzten Themen an',

'FLTL_EXCLUDED_FORUMS'              => 'Schließen Sie Foren aus dem Fancy Lazy Topics-Loader aus',
'FLTL_EXCLUDED_FORUMS_EXPLAIN'      => 'Halten Sie die Umschalttaste oder die STRG Taste gedrückt, um weitere Foren auszuwählen',

'FLTL_READ_MORE'                    => 'Mehr',
'FLTL_BACK_TO_START'                => 'Zurück zum Start',
'FLTL_VIEW_MORE_TOPICS'             => 'MEHR THEMEN ANZEIGEN',
)
);