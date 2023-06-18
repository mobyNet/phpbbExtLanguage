<?php
/**
 *
* @package BBprefix
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
 *
 */

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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

$lang = array_merge($lang, [
'POSTING_PREFIXES'                    => 'Themenpräfixe',
'POSTING_PREFIXES_USED'               => 'Angewendete Themenpräfixe',
'POSTING_PREFIXES'                    => 'Prefixe',

'PREFIXED_TOKEN_USERNAME'             => '{USERNAME}',
'PREFIXED_TOKEN_USERNAME_EXPLAIN'     => 'Dieses Token wird durch den Benutzernamen des Benutzers ersetzt, der das Präfix auf das Thema anwendet.',
'PREFIXED_TOKEN_POSTER'               => '{POSTER}',
'PREFIXED_TOKEN_POSTER_EXPLAIN'       => 'Dieses Token wird durch den Benutzernamen des Themenposters ersetzt.',
'PREFIXED_TOKEN_DATE'                 => '{DATE}',
'PREFIXED_TOKEN_DATE_EXPLAIN'         => 'Dieses Token wird durch das Datum ersetzt, an dem das Präfix auf das Thema angewendet wurde.',
]);