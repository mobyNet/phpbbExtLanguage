<?php
/**
*
* @package Avatar Resize
* @copyright (c) 2016 SiteSplat All rights reserved
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

$lang = array_merge(
$lang, array(
'AVATAR_RESIZE' 						=> 'Avatar Größe ändern',
'AVATAR_RESIZE_EXPLAIN'			=> 'Klicke auf bearbeiten, um  das %1$s zuzuschneiden, und Sende es ab. Ihr %1$s wird mit einer Höhe von %2$s Pixel und einer Breite von %3$s Pixel gespeichert.',
'BBAVATARRSIZE_NOTICE'			=> '<div class="phpinfo"><p>Für diese Erweiterung gibt es keine spezifische Konfiguration. Nachdem der Benutzer den Avatar über den UCP Avatar-Upload hochgeladen hat, ist die Zuschneideoption verfügbar.<br /> &Uuml;berpr&uuml;fe im ACP &#62; Avatar Einstellungen: "Avatar-Dateigröße": 0 oder 2 MB oder mehr für eine reibungslose Benutzererfahrung.</p></div>',
'SS_HELPER_NOTY'						=> 'SiteSplat BBcore existiert nicht! <br/> Laden Sie das <a href="http://sitesplat.com" target="_blank"> BBcore </a> herunter und kopieren Sie den BBcore-Ordner in Ihren SiteSplat-Erweiterungsordner.',
));