<?php
/**
*
* BBmarkdown
* @copyright (c) 2015 SiteSplat All rights reserved
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
	'LITEDOWN_NOTICE'	    => '<div style="width:80%;margin:20px auto;"><p>Es gibt keine spezifischen Einstellungen für diese Erweiterung. Viel Spaß!</p></div>',
	'SS_HELPER_NOTY'		=> 'SiteSplat BBcore existiert nicht!<br />Laden Sie das <a href="http://sitesplat.com" target="_blank">BBcore</a> herunter und kopieren Sie den BBcore-Ordner in Ihren Sitesplat-Erweiterungsordner.',
));
