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
	'BBTRANSLATE'				=> 'BBtranslate settings',
	'BBTRANSLATE_EXPLAIN'		=> 'Enter your Key1 or Key2 From your Azure Translator Text Subscription. <br /><strong>STEP1:</strong> Signup for a Microsoft Azure Account here: <a href="https://azure.microsoft.com/en-us/account/" target="blank">Microsoft Azure Portal</a> <br /><strong>STEP2:</strong> Now register a new App and subscription (free or paid) for the Translation Text app, following the 4 steps highlighted here: <a href="https://www.microsoft.com/en-us/translator/getstarted.aspx" target="blank">Getting started using the Translator API</a> in order to get your Key1 or Key2 to be used with BBtranslate.',
	
	// Older entries from the azure data market version
	'BBTRANSLATE_CLIENT_ID'		=> 'Client ID',
	'BBTRANSLATE_SECRET_KEY'	=> 'Client Secret',
	
    'BBTRANSLATE_NOTICE'		=> '<div class="phpinfo"><p>The setting for this extensions are in <strong>%1$s » %2$s » %3$s » %4$s</strong>.</p></div>',
	'FH_HELPER_NOTICE'			=> 'SiteSplat BBcore does not exist!<br />Download the <a href="http://sitesplat.com" target="_blank">BBcore</a> and copy the BBcore folder into your sitesplat extension folder.',
));

// Description of Upload extension
$lang = array_merge($lang, array(
	'DESCRIPTION_PAGE'		=> 'Description',
	'DESCRIPTION_NOTICE'	=> 'Extension note',
	'ext_details' => array(
		'details' => array(
			'DESCRIPTION_1'		=> 'Options',
			'DESCRIPTION_2'		=> 'General options',
			'DESCRIPTION_3'		=> 'Post & Topic settings',
			'DESCRIPTION_4'		=> 'Default setup all users',
		),
		'note' => array(
			'NOTICE_1'			=> '3.2 ready.',
		)
	)
));
