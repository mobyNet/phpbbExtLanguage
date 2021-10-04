<?php
/**
*
 * @package ReplyToUnihde
 * @copyright (c) 2016 SiteSplat <http://sitesplat.com>
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
	// Hide BBCode
	'HIDE_ON'		=> 'Versteckter Inhalt',
	'HIDE_OFF'		=> 'Versteckter Inhalt (nur für Mitglieder)',
	'HIDE_EXPLAIN'	=> 'Dieses Forum erfordert, dass Sie registriert und angemeldet sind und zuerst antworten, um den versteckten Inhalt anzuzeigen...',
	'HIDE_HELPLINE'	=> '[hide]{TEXT}[/hide]',
));