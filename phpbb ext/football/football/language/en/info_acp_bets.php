<?php
/**
 *
 * info_acp_bets.php [en]
 *
 * @package phpBB Extension - Football Football
 * @copyright (c) 2016 football (http://football.bplaced.net)
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

$lang = array_merge($lang, array(
'ACP_FOOTBALL_BETS'                       => 'Bets',
'ACP_FOOTBALL_BETS_MANAGE'                => 'Edit bets',
'ACP_FOOTBALL_BETS_MANAGE_EXPLAIN'        => 'Here you can edit all bets of all users.',
'ACP_FOOTBALL_BETS_MANAGEMENT'            => 'Bets management',
'SELECT_MATCHDAY'                         => 'Select matchday',
));