<?php
/**
*
* Imgur - forum images uploader
*
* @copyright (c) 2015 SiteSplat All rights reserved
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
	'IMGUR_CLIENT_ID'			=> 'IMGUR Client ID',
	'IMGUR_CLIENT_ID_EXPLAIN'	=> 'Sie müssen eine Imgur-App registrieren, um die <strong>Client-ID</strong> zu erhalten.<br />Zum Erstellen einer neuen App rufen Sie <a href = "https://api.imgur.com/oauth2/addclient" target="_ blank">diese Seite</a> auf. Dann geben Sie hier die Client ID ein.',

	'IMGUR_UPLOAD_TITLE'		=> 'Bilder Hochladen',
	'IMGUR_UPLOAD_MAIN'			=> 'Laden Sie ein Bild zur Verwendung in einem Thema über <a href="https://imgur.com" target="_blank">IMGUR</a> Dienst hoch. Das Bild wird nach dem Absenden automatisch in das Feld oben eingefügt',
	'IMGUR_UPLOAD'				=> 'Bild jetzt hochladen',
	'IMGUR_SELECT'				=> 'Bild auswählen',
    'IMGUR_COPY'				=> 'Kopieren',

	'IMGUR_OUTPUT_LINK'			=> 'Direct link',
	'IMGUR_OUTPUT_IMAGE'		=> 'BBcode tag',
	'IMGUR_OUTPUT_IMAGE_DELETE'	=> 'Löschlink',
	'IMGUR_OUTPUT_MARKDOWN'	    => 'Markdown',
	'MARKDOWN_WHATIS'	        => '<a href="//themeforest.net/user/themesplat/portfolio?ref=ThemeSplat" title="zur Verwendung mit &#34;BBmarkdown&#34; Premium Erweiterung für phpBB Premium Themes" target="_blank"><i class="fa fa-question-circle"></i></a>',
	'IMGUR_OUTPUT_PLACEHOLDER'	=> 'Warten auf Bild-Upload ...',

	'IMGUR_SIGNATURE'	=> 'Verwendung des IMGUR-Bild-Uploads in Benutzer Signaturen zulassen',

	'ALLOW_IMGUR'					=> 'IMGUR-Avatare zulassen',
	'AVATAR_DRIVER_IMGUR_TITLE'		=> 'IMGUR avatar',
	'AVATAR_DRIVER_IMGUR_EXPLAIN'	=> 'Wenn <strong>IMGUR-Avatare zulassen</strong> aktiviert ist, können Benutzer ihr Avatar auf IMGUR Hochladen',
	'IMGUR_AVATAR'					=> 'IMGUR avatar',

	'IMGUR_QUICKREPLY'	=> 'Erlaube IMGUR in Snappy Smart Reply',

));