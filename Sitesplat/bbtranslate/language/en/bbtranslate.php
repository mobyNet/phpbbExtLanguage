<?php
/**
*
* @package BBtranslate
* @copyright (c) 2016 SiteSplat All rights reserved
* @license Proprietary
*
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
'BBTRANSLATE_SELECT'               => 'translate',
'TOTAL_TRANSLATIONS'=> array(
2	                              => 'Total post translations <strong>%d</strong>',
),
));