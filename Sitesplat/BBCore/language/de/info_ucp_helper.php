<?php
/**
 *
 * @package language
 * @package sitesplat BBcore addon
 * @copyright (c) 2015 SiteSplat All rights reserved
 * @license Proprietary
 *
 */

// TRANSLATORS PLEASE NOTE
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
'UCP_IR'                           => 'Bildanpassung',
'IMAGE_RESIZE'                     => 'Bildgröße ändern',
'IMAGE_RESIZE_EXPLAIN'             => 'Schneide deine %1$s aus dem Bild aus und bestätige.',
// Your avatar will be saved with a height of %1$s pixels and a width of %2$s pixels.',
'IMAGE_RESIZE_ERROR'               => 'Keine App oder Datei zum Senden!',
'IMAGERESIZE_NOTICE'               => '<div class="phpinfo"><p>Für diese Erweiterung gibt es keine spezielle Konfiguration. Nachdem der Benutzer den Avatar über den UCP-Avatar-Upload hochgeladen hat, ist die Option zum Zuschneiden verfügbar.<br /> Überprüfen Sie das ACP &#62; Avatar-Einstellungen: "Maximale Avatar-Dateigröße" auf 0 oder 2 MB oder mehr für eine reibungslose Benutzererfahrung.</p></div> ',
'ERROR_IMAGERESIZE_DISABLE'        => 'Sie können BBAvatarResize wegen anderer aktiver SiteSplat-Erweiterungen nicht deaktivieren<br /><div>» %s</div>',
'SS_HELPER_NOTY'                   => 'SiteSplat BBcore existiert nicht!<br />Laden Sie <a href="https://sitesplat.com" target="_blank">BBcore</a> herunter und kopieren Sie den BBcore-Ordner in Ihren Sitesplat-Erweiterungsordner.',
));