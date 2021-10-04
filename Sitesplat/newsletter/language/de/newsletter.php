<?php
/**
*
* @package BBnewsletter
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
	'NEWSLETTER'				=> 'Newsletter',
	'OVERVIEW'					=> 'Herzlich willkommen zu unserem Newsletter! :-) Auf dieser Seite finden Sie die aktuellen Newsletter sowie das Archiv der vergangenen Jahre.',

	'SUBSCRIBE_NO'				=> 'Ich m&ouml;chte den Newsletter NICHT mehr erhalten',
	'SUBSCRIBE_YES'				=> 'Ja, ich m&ouml;chte den Newsletter erhalten',
	'SUBSCRIBE_BTN_NO'			=> 'Abbrechen',
	'SUBSCRIBE_BTN_YES'			=> 'Abonnieren',
	'SUBSCRIBE_CONFIRM_NO'		=> 'Bitte senden Sie das Formular ab, um Ihr Abonnement zu k&uuml;ndigen',
	'SUBSCRIBE_CONFIRM_YES'		=> 'Bitte senden Sie das Formular ab, um Ihr Abonnement zu best&auml;tigen',

	'SUBSCRIBE_Y_EMAIL'			=> 'Deine E-Mail',
	'SUBSCRIBE'					=> 'Abonnieren',
	'UNSUBSCRIBE'				=> 'Abbestellen',
	'SUBSCRIBE_INFO'			=> 'Unser Newsletter. Abgemeldete Mitglieder erhalten unsere  News-&Uuml;bersicht nicht mehr.',
	
	'OVERVIEW_ARCHIVE'			=> 'Archiv &Uuml;bersicht',
	'ARCHIEVES'					=> 'Archiv',
	'SUBSCRIBED'				=> 'Danke, dass Sie sich angemeldet haben! Sie werden ab heute unseren Newsletter erhalten!',
	'UNSUBSCRIBED'				=> 'Wenn Sie sich erfolgreich abgemeldet haben, werden Sie unseren Newsletter nicht mehr erhalten.'
));
