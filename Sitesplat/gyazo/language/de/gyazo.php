<?php
/**
*
* Gyazo - forum images uploader
*
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

$lang = array_merge($lang, array(
	'GYAZO_ACCESS_TOKEN'			=> 'Gyazo zugriff Token',
	'GYAZO_ACCESS_TOKEN_EXPLAIN'	=> 'Sie müssen eine Gyazo-App registrieren, um das <strong>Zugriffstoken</strong> zu erhalten.<br /> Um eine neue App zu erstellen, gehen Sie zu <a href="https://gyazo.com/api">https:/ /gyazo.com/api</a>. Geben Sie dann hier das Access Token ein.',
	
	'GYAZO_UPLOAD_TITLE'		    => 'Bild Hochladen',
	'GYAZO_UPLOAD_MAIN'			    => 'Laden Sie über den Gyazo-Dienst ein Bild zur Verwendung im Thema hoch. Das Bild wird nach dem Absenden automatisch in das Beitragsfeld oben eingefügt',
	'GYAZO_UPLOAD'				    => 'Jetzt Bild hochladen',
	'GYAZO_SELECT'				    => 'Bild ausw&auml;hlen',
    'GYAZO_COPY'				    => 'Kopie',
       
	'GYAZO_OUTPUT_LINK'			    => 'Direkt link',
	'GYAZO_OUTPUT_IMAGE'		    => 'IMG tag',
	'GYAZO_OUTPUT_IMAGE_DELETE'	    => 'L&ouml;sch Link',
	'GYAZO_OUTPUT_PLACEHOLDER'	    => 'Warten auf Bild-Upload...',

));