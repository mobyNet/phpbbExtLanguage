<?php
/**
 * LikeBB Lite. An extension for the phpBB Forum Software package.
 * @copyright (c) 2016, SiteSplat
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
'LIKE_INSTALL_SUCCESS'                       => '<h2> Gef&auml;llt mir/Gef&auml;llt mir nicht-Addon wurde erfolgreich installiert.</h2>',
'LIKE_UPDATE_SUCCESS'                        => '<h2>LikeDD wurde aktualisiert.</h2>',
'LIKE_MODE_ERROR'                            => 'Modus existiert nicht',
'LIKE_POST_ERROR'                            => 'Beitrag existiert nicht',
'LIKE_POST_NO_AUTH'                          => 'Sie sind nicht berechtigt, diesen Beitrag zu Liken oder Disliken.',
'LIKE_OWN_POST_ERROR'                        => 'Sie können Ihren eigenen Beitrag nicht Liken oder Disliken.',
'LIKE_DISLIKE_REMOVE_INFO'                   => 'So entfernen Sie Ihre Dislikes, klicken Sie auf den Button Dislike.',
'LIKE_LIKE_REMOVE_INFO'                      => 'Klicken Sie auf den Button "Gefällt mir", um Ihr Like zu entfernen.',
'LIKE_USER_INFO_LIKE'                        => 'Gefällt mir',
'LIKE_USER_INFO_DISLIKE'                     => 'Gefällt mir nicht',

'LIKE_USER_INFO_REMOVED'                     => 'Ihr %s dieses Beitrags wurde entfernt.',
'LIKE_USER_INFO_APPRECIATE'                  => '<h2>%s freut sich über deinen Beitrag!</h2>',
'LIKE_USER_INFO_APPRECIATE_STRONG'           => '<div class="ld-ajax"><strong>%s</strong> freut sich über Ihren Beitrag! </div>',
'LIKE_POST_INFO_DISLIKE'                     => '<h2>Beitrag von %s wurde Disliked.</h2>',
'LIKE_POST_INFO_DISLIKE_STRONG'              => '<div class="ld-ajax">Beitrag von <strong>%s</strong> wurde Disliked.</div>',

'LIKES_GIVEN'                                => 'Likes vergeben',
'LIKES_RECEIVED'                             => 'Likes erhalten',
'DISLIKES_GIVEN'                             => 'Dislikes gegeben',
'DISLIKES_RECEIVED'                          => 'Dislikes erhalten',
'LIKES_LIKE_IT'                              => 'Mir gef&auml;llt das',
'LIKES_LIKE'                                 => 'Gef&auml;llt mir',
'LIKES_DISLIKE_IT'                           => 'Mir gef&auml;llt das nicht',
'LIKES_DISLIKE'                              => 'Gef&auml;llt mir nicht',
));