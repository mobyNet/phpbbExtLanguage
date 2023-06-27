<?php
/**
 *
 * @package Forumhulp Helper
 * @copyright (c) 2015 ForumHulp.com
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

$lang = array_merge($lang,array(
'UCP_IR'                          => 'Bildverkleinerer',
'IMAGE_RESIZE'                    => 'Bildverkleinerer',
'IMAGE_RESIZE_EXPLAIN'            => 'Ausschneiden Sie Ihre %1$s aus dem Bild und bestätigen Sie.',
// Ihr Avatar wird mit einer Höhe von %1$s Pixel und einer Breite von %2$s Pixel gespeichert.'
'IMAGE_RESIZE_ERROR'              => 'Keine App oder Datei zum Senden!',
'IMAGERESIZE_NOTICE'              => '<div class="phpinfo"><p class="entry">Dieses Modul ist versteckt und hat keine Konfigurationsoptionen. Wir erinnern Sie jedoch daran, den maximalen Upload in ACP einzustellen.</p></div>',
'ERROR_IMAGERESIZE_DISABLE'       => 'Sie können Image Resize wegen aktiver Erweiterungen nicht deaktivieren<br /><div class="phpinfo">" %s</div>',
'FH_HELPER_NOTICE'                => 'Forumhulp helper funktioniert Nicht!<br />Laden Sie <a href="https://github.com/ForumHulp/helper" target="_blank">forumhulp/helper</a> herunter und kopieren Sie den helper-Ordner in Ihren forumhulp-Erweiterungsordner.',
));