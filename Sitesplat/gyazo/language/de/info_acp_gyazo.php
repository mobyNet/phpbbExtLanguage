<?php
/**
 *
 * Gyazo - forum images uploader
 * @copyright (c) 2016 SiteSplat All rights reserved
 * @license Proprietary
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB')) {
	exit;
}

if (empty($lang) || !is_array($lang)) {
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
'SS_HELPER_NOTY'     => 'SiteSplat BBcore existiert nicht!<br />Laden Sie den <a href="https://sitesplat.com" target="_blank">BBcore</a> herunter und kopieren Sie den BBcore-Ordner in Ihren Sitesplat-Erweiterungsordner.',
'GYAZO_NOTICE'       => '<div style="width:auto;margin:20px auto;"><p>Die Einstellungen für diese Erweiterung befinden sich in <strong>%1$s » %2$s » %3$s.</strong><br />Bitte beachten Sie, dass Sie eine Gyazo-App registrieren müssen, um die Token-ID zu erhalten, die für die Funktion dieser Erweiterung erforderlich ist. <br />Um eine neue App zu erstellen, gehen Sie zu <a href="https://gyazo.com/api" target="_blank">https://gyazo.com/api</a> und registrieren Sie sie wie folgt die bereitgestellte Anleitung. <br />Dann verwenden Sie die Gyazo-Token-ID unter <strong>ACP > Beiträge > Dateianhänge: Gyazo Client ID</strong></p></div>',
));