<?php
/**
 *
 * info_acp_football_all_bets [Deutsch — Du]
 *
 * @package language
 * @version $Id: info_acp_football_all_bets.php 6 2011-01-09 08:02:37Z football $ 
 * @copyright (c) 2010 football (http://football.bplaced.net)
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, array(
'ACP_FOOTBALL_ALL_BETS'                       => 'Alle Tipps',
'ACP_FOOTBALL_ALL_BETS_MANAGEMENT'            => 'Tipprunde-Alle Tipps ansehen',
'ACP_FOOTBALL_ALL_BETS_VIEW'                  => 'Alle Tipps ansehen',
'ACP_FOOTBALL_ALL_BETS_VIEW_EXPLAIN'          => 'Hier kannst du alle Tipps der Tipper einsehen.',

'SELECT_MATCHDAY'                             => 'Spieltag wählen',
));
?>