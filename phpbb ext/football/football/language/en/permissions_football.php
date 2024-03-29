<?php
/**
 *
 * permissions_football.php [en]
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
'ACP_FOOTBALL'                          => 'FOOTBALL',
'ACL_U_USE_FOOTBALL'                    => 'Can use Prediction League',
'ACL_A_FOOTBALL_CONFIG'                 => 'Can change Prediction League settings',
'ACL_A_FOOTBALL_DELETE'                 => 'Can remove match schedules',
'ACL_A_FOOTBALL_EDITBETS'               => 'Can edit all bets',
'ACL_A_FOOTBALL_PLAN'                   => 'Can create and edit match schedules',
'ACL_A_FOOTBALL_RESULTS'                => 'Can edit final match results',
'ACL_A_FOOTBALL_POINTS'                 => 'Can edit Football accounts',
'ROLE_ADMIN_FOOTBALL'                   => 'Prediction League administrator',
'ROLE_DESCRIPTION_ADMIN_FOOTBALL'       => 'Can edit final match results.',
));