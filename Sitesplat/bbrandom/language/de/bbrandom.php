<?php
/**
*
* @package BBrandom
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
'AVATAR_DRIVER_RGRAVATAR_TITLE'         => 'Random Gravatar',
'AVATAR_DRIVER_RGRAVATAR_EXPLAIN'       => 'Diese Option ermöglicht die Verwendung für das zufällige Gravatar',
'BBRANDOM_SITESPLAT'                    => '<i class="fa fa-info-circle"></i>Erweiterung für zufällige Avatare von <a href="http://www.sitesplat.com" title="Professional Web Entwicklung"><strong>SiteSplat. com</strong></a> für <a href="https://themeforest.net/user/themesplat/portfolio?ref=ThemeSplat" title="Professional Premium Themes"><strong> SiteSplat-Themes</strong></a>',
));