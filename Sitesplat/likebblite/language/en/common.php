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
'LIKE_INSTALL_SUCCESS'                    => '<h2>Like/Dislike Addon has been installed Successfully.</h2>',
'LIKE_UPDATE_SUCCESS'                     => '<h2>LikeDD has been updated.</h2>',
'LIKE_MODE_ERROR'                         => 'Mode does not exist',
'LIKE_POST_ERROR'                         => 'Post does not exist',
'LIKE_POST_NO_AUTH'                       => 'You are not authorized to like/dislike this post.',
'LIKE_OWN_POST_ERROR'                     => 'You cannot like/dislike your own post.',
'LIKE_DISLIKE_REMOVE_INFO'                => 'To remove your dislike, click the dislike button.',
'LIKE_LIKE_REMOVE_INFO'                   => 'To remove your like, click the like button.',
'LIKE_USER_INFO_LIKE'                     => 'like',
'LIKE_USER_INFO_DISLIKE'                  => 'dislike',

'LIKE_USER_INFO_REMOVED'                  => 'Your %s of this post has been removed.',
'LIKE_USER_INFO_APPRECIATE'               => '<h2>%s appreciates your liking their post!</h2>',
'LIKE_USER_INFO_APPRECIATE_STRONG'        => '<div class="ld-ajax"><strong>%s</strong> appreciates your liking their post!</div>',
'LIKE_POST_INFO_DISLIKE'                  => '<h2>Post by %s has been disliked.</h2>',
'LIKE_POST_INFO_DISLIKE_STRONG'           => '<div class="ld-ajax">Post by <strong>%s</strong> has been disliked.</div>',

'LIKES_GIVEN'                             => 'Likes Given',
'LIKES_RECEIVED'                          => 'Likes Received',
'DISLIKES_GIVEN'                          => 'Dislikes Given',
'DISLIKES_RECEIVED'                       => 'Dislikes Received',
'LIKES_LIKE_IT'                           => 'I like This',
'LIKES_LIKE'                              => 'Like',
'LIKES_DISLIKE_IT'                        => 'I Dislike This',
'LIKES_DISLIKE'                           => 'Dislike',
));