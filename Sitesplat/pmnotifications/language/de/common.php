<?php
/**
 *
 * @package PMnotifications
 * @copyright (c) 2016 SiteSplat All rights reserved
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
'FROM_AUTHOR_PM_LIST'             => 'Vorherige PMs von diesem Benutzer',
'PM_UNREAD_COUNT' => array(
0                                 => 'Keine ungelesenen PMs. Toll!',
1                                 => '1 ungelesene PM',
2                                 => '%d ungelesene PMs',
),
));