<?php
/**
 *
 * Profile Wall
 * @copyright (c) 2015 SiteSplat All rights reserved
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
'ACP_PROFILEWALL'                           => 'Profilnachrichten',
'SS_HELPER_NOTY'                            => 'SiteSplat BBcore existiert nicht! <br /> Laden Sie das <a href="http://sitesplat.com" target="_blank"> BBcore </a> herunter und kopieren Sie den BBcore-Ordner in Ihren Sitesplat Erweiterungsordner.',
'PROFILEWALL_NOTICE'                        => '<div class="phpinfo"><p>Die Einstellungen für diese Erweiterung sind in <strong>%1$s » %2$s » %3$s</strong>.<br/>Stellen Sie sicher, dass Sie die Berechtigungsrollen festlegen. <strong>Berechtigungen &#187; Berechtigungsrollen</strong> und beide <strong>"Moderatorrollen"</strong> und <strong>"Benutzerrollen"</strong></p></div>',


'ACL_U_PROFILE_WALL_VIEW'                   => 'Kann Profilnachrichten sehen',
'ACL_U_PROFILE_WALL_EDIT'                   => 'Kann Profilnachrichten bearbeiten',
'ACL_U_PROFILE_WALL_POST'                   => 'Kann Profilnachrichten erstellen',
'ACL_U_PROFILE_WALL_LIKE'                   => 'Kann Profilnachrichten Liken',

'ACL_M_PROFILE_WALL_EDIT'                   => 'Kann Profilnachrichten bearbeiten',
'ACL_M_PROFILE_WALL_SOFT_DEL'               => 'Kann Profilnachrichten vorläufig löschen',
'ACL_M_PROFILE_WALL_VIEW_SOFT_DEL'          => 'Kann vorläufig gelöschte Profilnachrichten sehen',

));