<?php
/**
*
* @package BBgdpr
* @copyright (c) 2018 SiteSplat All rights reserved
* @license Proprietary
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
'ACL_U_DELETE_MY_ACCOUNT_POSTS'     => 'Kann Beitr&auml;ge beim L&ouml;schen des Kontos l&ouml;schen',
'ACL_U_DELETE_MY_ACCOUNT_PMS'       => 'Kann PMs beim L&ouml;schen des Kontos l&ouml;schen',
));