<?php
/**
*
* Tracker (FLATBOOTS STYLE ONLY).
*
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACL_U_TRACKER_VIEW' => 'Can view tracker tickets',
	'ACL_U_TRACKER_POST' => 'Can post tracker tickets',
	'ACL_U_TRACKER_DELETE_ALL' => 'Can delete all tracker tickets/posts if in project group',
	'ACL_U_TRACKER_DELETE_GLOBAL' => 'Can edit all tracker tickets/posts in any project',
	'ACL_U_TRACKER_EDIT' => 'Can edit own tracker tickets/posts',
	'ACL_U_TRACKER_EDIT_GLOBAL' => 'Can edit all tracker tickets/posts in any project',
	'ACL_U_TRACKER_EDIT_ALL' => 'Can edit all tracker tickets/posts if in project group',
	'ACL_U_TRACKER_ATTACH' => 'Can attach files to tracker tickets/posts',
	'ACL_U_TRACKER_DOWNLOAD' => 'Can download files from tracker tickets/posts',
	'ACL_U_TRACKER_TICKET_SECURITY' => 'Can specify security tickets if enabled for project',
	'ACL_F_TRACKER_TICKET_FROM_TOPIC' => 'Can create new ticket out of topic',
	'ACL_A_TRACKER' => 'Can manage tracker',
));
