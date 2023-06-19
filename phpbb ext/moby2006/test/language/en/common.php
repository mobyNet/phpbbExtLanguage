<?php
/**
 *
 * @package phpBB Extension - Acme Demo
 * @copyright (c) 2013 phpBB Group
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

if (!defined('IN_PHPBB')) {
	exit;
}

if (empty($lang) || !is_array($lang)) {
	$lang = array();
}

$lang = array_merge($lang, array(
'DEMO_PAGE'                   => 'Demo',
'DEMO_HELLO'                  => 'Hallo %s!',
'DEMO_GOODBYE'                => 'Goodbye %s!',

'ACP_TEST_TITLE'              => 'Test',
'ACP_TEST'                    => 'Translation_de',
'ACP_TEST2'                   => 'Test2',
'ACP_TEST3'                   => 'Test3',
'ACP_TEST4'                   => 'Test4',

'ACP_DEMO_TITLE'              => 'Translation Tool Ext',
'ACP_DEMO_GOODBYE'            => 'Wollen Sie Goodbye sagen?',
'ACP_DEMO_SETTING_SAVED'      => 'Die Einstellungen wurden gespeichert!',
));