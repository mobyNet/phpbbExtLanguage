<?php
/**
 *
 * @package PMnotifications
 * @copyright (c) 2016 SiteSplat All rights reserved
 * @license Proprietary
 *
 */

if (!defined('IN_PHPBB')) {
	exit;
}

if (empty($lang) || !is_array($lang)) {
	$lang = array();
}

$lang = array_merge($lang, array(
'ACP_PMNOTIFICATIONS'          => 'PM Benachrichtigungen',
'SS_HELPER_NOTY'               => 'SiteSplat BBcore existiert nicht! <br /> Laden Sie das <a href="http://sitesplat.com" target="_blank"> BBcore </a> herunter und kopieren Sie den BBcore-Ordner in Ihren SiteSplat-Erweiterungsordner.',
'PMNOTIFICATIONS_NOTICE'       => '<div class="phpinfo"><p>F&uuml;r diese Erweiterung gibt es keine spezifischen Einstellungen. Die PMs werden automatisch vom internen phpBB-Benachrichtigungssystem getrennt. <br /> Der Filter Button befindet sich in der PM-Nachrichten Ansicht.</p></div>',
));