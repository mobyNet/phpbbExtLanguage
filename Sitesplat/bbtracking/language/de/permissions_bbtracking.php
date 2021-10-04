<?php
/**
*
* BBtracking
*
* @copyright (c) 2017, Sitesplat
* @license private
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
	'ACL_M_PRIMEPOSTREV_VIEW'		=> 'Kann Beitrag Revisionen sehen',
	'ACL_M_PRIMEPOSTREV_DELETE'		=> 'Kann Beitrag Revisionen löschen',
	'ACL_M_PRIMEPOSTREV_RESTORE'	=> 'Kann Revisionen von Beiträgen wiederherstellen',
	'ACL_F_PRIMEPOSTREV_VIEW'		=> 'Kann eigene Revisionen sehen',
	'ACL_F_PRIMEPOSTREV_DELETE'		=> 'Kann eigene Revisionen l&ouml;schen',
	'ACL_F_PRIMEPOSTREV_RESTORE'	=> 'Kann eigene Revisionen Wiederherstellen',
));
