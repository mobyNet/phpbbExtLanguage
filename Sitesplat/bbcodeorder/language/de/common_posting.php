<?php
/**
*
* BBcodeOrder+
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
'BBCODE_B'				=> 'Fett',
'BBCODE_I'				=> 'Kursiv',
'BBCODE_U'				=> 'Unterstrichen',
'BBCODE_L'				=> 'Aufzählung',
'BBCODE_O'				=> 'Geordnete Aufzählung',
'BBCODE_LISTITEM'			=> 'Listeneintrag',
'BBCODE_C'				=> 'Code',
'BBCODE_Q'				=> 'Zitat',
'BBCODE_IMG'				=> 'Bild',
'BBCODE_URL'				=> 'URL',
'BBCODE_FLASH'				=> 'FLASH',
));