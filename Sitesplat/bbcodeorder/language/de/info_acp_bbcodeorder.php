<?php
/**
*
* @package BBCodeorder
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
	'ACP_BBCODEORDER'				=> 'BBCodeOrder+',
	'SS_HELPER_NOTY'	            => 'SiteSplat BBcore existiert nicht!<br />Laden Sie das <a href="http://sitesplat.com" target="_blank">BBcore</a> herunter und kopieren Sie den BBcore-Ordner in Ihren SiteSplat-Erweiterungsordner.',
	'BBCODEORDER_NOTICE'	        => '<div class="phpinfo"><p>Die Einstellungen für diese Erweiterung sind in <strong>%1$s &#187; %2$s &#187; %3$s</strong>.</p></div>',
));

