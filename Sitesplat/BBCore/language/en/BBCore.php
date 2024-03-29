<?php
/**
 *
 * BBCore [English]
 *
 * @package sitesplat BBcore
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

 // BBCore
$lang = array_merge($lang, array(
'PM_NEW_MSG'  => [
1                                         => 'You have %d New Private Message',
2                                         => 'You have %d New Private Messages',
],
'PM_UNREAD_MSG'  => [
1                                         => 'You have %d Unread Private Message',
2                                         => 'You have %d Unread Private Messages',
],
'PM_NEW_MSG_BUBBLE' => [
1                                         => '%d',
2                                         => '%d',
],
'SITESPLAT_EXT'                           => 'Other Extensions',
'BBCORE_DASHBOARD'                        => 'Dashboard',
'SITESPLAT_UPDATE_MANAGER'                => 'Update Manager',
'BBCORE_SETTINGS'                         => 'Settings',
'BBCORE_FS_REQUIRE'                       => '%s requires the SiteSplat Filesystem',
'BBCORE_MYSQL_REQUIRE'                    => '%s requires MySQL',
'BBCORE_BAD_SERVER'                       => 'Your server settings are incompatible with %s',
'SS_CHATBOX'                              => 'Chat',
'CHATBOX_MODERATORS'                      => 'Chatbox Moderators',
'BBCORE_MEM'                              => '%1$s total, %2$s in use',

'SS_ADDONS'                               => 'Addons',
'SS_ADDON_SETTINGS'                       => 'Addon Settings',
'SS_LID_INFO'                             => 'This is your SiteSplat License Key. You will be required to enter this key after you install or update BBCore.',

'UCP_MAIN'                                => 'Overview',
'UCP_MAIN_FRONT'                          => 'Front page',
'UCP_MAIN_SUBSCRIPTION'                   => 'Manage subscriptions',
'UCP_MAIN_BOOKMARKS'                      => 'Manage bookmarks',
'UCP_MAIN_DRAFTS'                         => 'Manage drafts',
'UCP_MAIN_ATTACHMENTS'                    => 'Manage attachments',

'USER_PANEL'                              => 'Control Panel',
'UCP_PROFILE'                             => 'Profile',
'UCP_PROFILE_PROFILE'                     => 'Edit profile',
'UCP_PROFILE_SIGNITURE'                   => 'Edit signature',
'UCP_PROFILE_AVATAR'                      => 'Edit avatar',
'UCP_PROFILE_SETTINGS'                    => 'Account settings',
'UCP_AVATAR_SELECT_OPTIONS'               => 'Avatar options',
'UCP_AVATAR_SELECT_UPLOAD'                => 'Upload avatar from your device',
'UCP_SUBMIT_TO_UPLOAD'                    => 'Submit below to upload',

'UCP_PREFERENCE'                          => 'Board preferences',
'UCP_PREFERENCE_SETTINGS'                 => 'Edit global settings',
'UCP_PREFERENCE_DEFAULTS'                 => 'Edit posting defaults',
'UCP_PREFERENCE_OPTIONS'                  => 'Edit display options',

'UCP_MESSAGES'                            => 'Messages',
'UCP_PM_COMPOSE'                          => 'Compose message',
'UCP_PM_DRAFTS'                           => 'Manage drafts',
'UCP_PM_INBOX'                            => 'Inbox',
'UCP_PM_OUTBOX'                           => 'Outbox',
'UCP_PM_SENTBOX'                          => 'Sent',
'UCP_PM_OPTIONS'                          => 'Rules, folders &amp; settings',
'UCP_NO_USER_CHANGE_ALLOWED'              => '**Username change is not allowed**',
'UCP_REGISTER_EMAIL_EXPLAIN'              => 'Please do not use disposable emails',

'WIDTH_SIZE'                              => 'width',
'PIXEL_SIZE'                              => 'px',
'HEIGHT_SIZE'                             => 'height',

'UCP_GROUPS'                              => 'Usergroups',
'UCP_GROUPS_MEMBERSHIP'                   => 'Edit membership',
'UCP_GROUPS_MANAGE'                       => 'Manage groups',

'UCP_ZEBRA'                               => 'Friends &amp; Foes',
'UCP_ZEBRA_FRIENDS'                       => 'Manage friends',
'UCP_ZEBRA_FOES'                          => 'Manage foes',
'UCP_APPLY'                               => 'Apply',
'UCP_PM_DEFAULT_RULE_TAG'                 => 'Default action',
'UCP_PM_DEFAULT_RULE'                     => 'Do not accept new messages',
'UCP_PM_DEFAULT_RULE_EXPLAIN'             => 'This action will be triggered only if none of the above options is applicable. New messages will be held back until enough space is available.',
'UCP_PM_NEW_MESSAGE'                      => 'New Message',
'BIO'                                     => 'Bio Personal Information',
'MANAGE'                                  => 'Manage',
'JOINED_BOARD'                            => 'Joined the Board',
'VISITED_BOARD'                           => 'Last visited',
'SEE_MORE'                                => 'More',
'ATTACH_SIGNATURE'                        => 'Attach signature',
'BBCODES'                                 => 'BBcodes',

'DELETE_POST_SOFT'                        => 'Soft Delete post',
'DELETE_POST_PERMANENT'                   => 'Perma Delete post',
'DELETE_POST_SOFT_WARN'                   => 'It can be recovered',
'DELETE_POST_PERMANENT_WARN'              => 'It can NOT be recovered',

'POLL_MAX_OPTIONS_EXPLAIN_ALT'            => 'Enter the max number of options the user can select',
'POLL_VOTE_CHANGE_LABEL'                  => 'Allow Re-vote',
'NO_VOTES_NA'                             => 'N/A',
'NOT_AVAILABLE'                           => 'Not available',
'POST_TOPIC_NEW'                          => 'New Topic',
'QUICK_REPLY_SHOW_HIDE'                                => 'Show/Hide Quick Reply',
'CHARACTERS_COUNT'                        => 'Characters',
'CHARACTERS_COUNT_REM'                    => 'Remaining',
'BOOKMARKED_TOPICS_UCP'                   => 'Bookmarked Topics',
'ATTACH_EXPLANATION_SORTABLE'             => 'Click to sort',
'ATTACH_FORUM'                            => 'Attachment(s)',
'MCP_DETAILS_LOG'                         => 'Details',
'MCP_DETAIL_U_IP'                         => 'User &amp; IP',
'MCP_MANAG_BAN'                           => 'Ban Management',
'MCP_UNAPPROVED_POSTS_ZERO'               => 'There are no posts waiting for approval',
'MCP_REPORTS_ZERO'                        => 'There are no reports to review',
'MCP_PM_REPORTS_ZERO'                     => 'There are no PM reports to review',

'SUBFORUM_LINK'                           => 'Link opens in a new tab',
'FORUMLIST_UNAPPROVED'                    => 'At least one topic in this forum has not been approved',
'FORUMLIST_UNAPPROVED_POST'               => 'At least one post in this forum has not been approved',
'FORUMLIST_LASTPOST'                      => 'View the latest post',
'TOPICS_POSTS_STATISTICS'                 => 'Statistics',
'TOPICS_ROW_REPORTED'                     => 'This Topic has been reported',
'TOPICS_ROW_NOT_APPROVED'                 => 'This Topic has not been approved',
'TOPICS_ROW_DELETED'                      => 'This Topic has been deleted',
'MODERATOR_PANEL_GENERAL'                 => 'Moderator Panel',
'ADMIN_PANEL_GENERAL'                     => 'Administrator Panel',
'RANK_IMAGE'                              => 'Rank image',

'WELCOME_INDEX'                           => 'Welcome',
'FAQ'                                     => 'FAQ',
'CAPTION_FAQ'                             => 'Common knowledge place',
'CAPTION_SEARCH'                          => 'Search it up!',
'CAPTION_MEMBERS'                         => 'Looking for someone?',
'MEMBERS_CAP'                             => 'Members',
'CAPTION_UCP'                             => 'Set your preferences',
'UCP_CAP'                                 => 'User Control Panel',
'INDEX_CAPTION'                           => 'This is the forum index page',
'VIEWTOPIC_CAP'                           => 'Topic Title',
'CAPTION_VIEWTOPIC'                       => 'Topic description',
'CAPTION_VIEWFORUM'                       => 'Browse all the forum categories',
'POSTINGS_CAP'                            => 'Posting Editor',
'CAPTION_POSTINGS'                        => 'Posting things up!',

'MCP_CAPTION'                             => 'This is where you get to use the Super Powers ;-)',
'BOOTSTRAP_ELEMENT'                       => 'Bootstrap Elements',
'BOOTSTRAP_ELEMENT_CAPTION'               => 'Forum KickStart Documentation',
'MAIN_FORUM'                              => 'Forum',
'MAIN_MAIN_STUFF'                         => 'The Main stuff',
'MAIN_TRENDS'                             => 'See the trends',

'MAIN_SEARCH_IT_UP'                       => 'Search it up',
'SUB_NO_ICON'                             => 'No Icon here at all',
'EXAMPLE_WITH_ICON'                       => 'Example With Icon',
'EXAMPLE_LINK'                            => 'Example Link',
'MAIN_SOCIAL'                             => 'Social',
'SOCIAL_P'                                => 'Chat away ;-)',

'MORE'                                    => 'More',
'EXPAND_CLOSE'                            => 'Close View',
'MARK_TOPICS_READ'                        => 'Mark Topics Read',
'CONTACT'                                 => 'Contact',
'GET_IN_TOUCH'                            => 'Get in touch',
'HANG_AROUND'                             => 'Hang around',
'JOIN_THE_CLUB'                           => 'Join the club',
'MENU'                                    => 'MENU',
'YOU_ARE_HERE'                            => 'You are here',
'IN_FOOTER'                               => 'In:',
'REPLY'                                   => 'Reply',

'LOGIN_REMEMBER'                          => 'Keep me logged in',
'LOGIN_HIDE_ME'                           => 'Hide session',
'LOGIN_ME_IN'                             => 'Log me in',
'SIGN_IN_ACCOUNT'                         => 'Sign in onto your account',
'CREATE_ACCOUNT'                          => 'Create account',
'GO_TO_SEARCH_ADV'                        => 'Return to the advanced search',

'CREATE_ACCOUNT_DISABLED'                 => 'Registrations closed',
'REGISTRATION_DISABLED'                   => 'It looks like the registrations are closed at the moment. It could also be a temporary measure. If you believe this is a possible error, please contact the webmaster and let him know. We apologize for any inconvenience this might have caused. Our Privacy Policy and Terms of Use are available below.',
'CONTACT_WEBMASTER'                       => 'Contact Webmaster',
'CONFIRM_QA_EXPLAIN_ALT'                  => 'Prove that you are human and answer this question',

'PLUPLOAD_PLACE_INLINE'                   => 'Inline',
'PLUPLOAD_DELETE_FILE'                    => 'Delete',

'REG_CREATING'                            => 'Creating Profile...',
'LOADING'                                 => 'Loading...',
'SAVING'                                  => 'Saving...',
'CANCELLING'                              => 'Cancelling...',
'SENDING'                                 => 'Sending...',
'SEARCHING'                               => 'Searching...',
'LOADING_LOG_IN'                          => 'Logging-in...',
'FILE_UPLOADING'                          => 'Uploading...',
'CASTING_VOTE'                            => 'Casting vote...',
'LOADING_FORM'                            => 'Loading form...',

'MEMBERLIST_P_JOINED'                     => 'Joined the board',
'MEMBERLIST_P_EXPL'                       => 'This is when I joined the board',
'MEMBERLIST_P_DATE_EXPL'                  => 'This was last time I visited the board',
'SPAMMER'                                 => 'Spammer',
'SPAMMER_PLACEHOLDER'                     => 'You cannot just spam our board and get away with it!',
'MARK_PLACEHOLDER'                        => 'Checkmark your choice',
'INFO_BOX'                                => 'Information:',
'USER_REMOVE_PLACEHOLDER'                 => 'Click to remove user',
'GROUP_REMOVE_PLACEHOLDER'                => 'Click to remove group',
'EDIT_LINK_PLACEHOLDER'                   => 'E.g. I forgot to code my links',
'POST_IT_UP_PLACEHOLDER'                  => 'Post it up!',

'UCP_REG_USR_PLACEHOLDER'                 => 'E.g. John Doe',
'UCP_REG_EMAIL_PLACEHOLDER'               => 'E.g. john@mail.com',
'UCP_REG_PSWD_PLACEHOLDER'                => 'E.g. ASDFasdf123',
'UCP_REG_CTCHA_PLACEHOLDER'               => 'E.g. blue sky',
'SEARCH_USR_PLACEHOLDER'                  => 'E.g. SiteSplat',
'YEAR_MONTH_DAY_PLACEHOLDER'              => 'E.g. 2018-12-22',
'IP_PLACEHOLDER'                          => 'E.g. 216.161.111.33',
'POSTS_PLACEHOLDER'                       => 'E.g. 12',
'SEARCH_KWDS_PLACEHOLDER'                 => 'E.g. cats, or cats+, or cats-, or cats|dogs, or cat*',

'MESSAGE_ENTER_PLACEHOLDER'               => 'Enter your message...',
'FILE_COMMENT_PLACEHOLDER'                => 'Comment your file',
'HEIGTH_PLACEHOLDER'                      => 'height',
'WIDTH_PLACEHOLDER'                       => 'width',
'UCP_OCCUPATION_PLACEHOLDER'              => 'Describe briefly your occupation...',
'UCP_INTERESTS_PLACEHOLDER'               => 'Describe your interests...',
'SOFT_DELETE_PLACEHOLDER'                 => 'Enter your reason if you wish to...',
'ADD_DESCRIPTION'                         => 'Add description',

'FILE_SELECT'                             => 'Select file',
'FILE_CHANGE'                             => 'Change',
'SELECT_IMAGE'                            => 'Select image',
'NOTE'                                    => 'Note',
'EDIT_DRAFT'                              => 'Edit Draft',
'PM_BALOON_NOTIFICATION'                  => 'Enable floating style notification for new PM (Private Message)',
'DAYS_AGO'                                => 'Days ago',
'WORK_IN_PROGRESS'                        => 'Maintenance',
'DISABLE_MESSAGE'                         => 'Board unavailable',
'DISABLE_RETURN'                          => 'Return to index page',
'BOARD_DISABLED_SHUFFLE'                  => 'Have fun and shuffle some letters :-)',
'DISABLE_TEXT_TRY'                        => 'Test it for yourself!',
'DISABLE_TEXT_TYPE'                       => 'type anything and hit return...',

'GRAVATAR_EXPLAIN'                        => 'If a <a href="//en.gravatar.com/" target="_blank">GRAVATAR</a> is associated to your email address, it will be set as default.',
'GRAVATAR_EXPLAIN_CONFIRM'                => 'Please confirm your email address here',

'DELETE_POLL'                             => 'Delete poll',
'POLL_DELETE_HELPER'                      => '(This deletes the poll only) check and submit',
'JUMP_TO_POST'                            => 'Jump to post',
'JUMP_SELECT_FORUM'                       => 'Select the forum to jump to',
'JUMP_TO_PAGE_NUMBER'                     => 'Jump to page #',
'VIEW_FIRST_UNREAD'                       => 'View first unread post',
'BOOKMARK_TOPIC_REMOVE'                   => 'Remove bookmark',

'NEW_MESSAGES'                            => 'New messages',
'YOU_HAVE'                                => 'You have',
'AND'                                     => 'and',
'HELLO'                                   => 'Hello',
'DISMISS_PM'                              => 'Defer 5 min',
'READ_NOW'                                => 'Read now',
'PRIVATE_MESSAGE_NEW'                     => 'new private message',
'PRIVATE_MESSAGE_UNREAD'                  => 'unread private message',
'NO_PMS_INFO'                             => 'All caught up! Compose new PM?',

'DATES'                                   => 'DATE',
'POWERED'                                 => 'Powered By',
'HANDCRAFTED'                             => 'HandCrafted With',
'BY'                                      => 'By',
'RECENT_TOPICS'                           => 'Recent Topics',
'TWITTER'                                 => 'Twitter',
'FAVORITES'                               => 'Favorites',

'GALLERY'                                 => 'Gallery',
'CHAT'                                    => 'Chat',
'ABOUT'                                   => 'About Us',
'ABOUT_PART_ONE'                          => 'BBOOTS&#8482; Is The First And Only Fully Responsive PhpBB&reg; Unofficial HTML5/CSS3 Theme. It’s Clean And Crisp Design Looks AWESOME Across All Browsers And Devices.',
'ABOUT_PART_TWO'                          => 'It Utilizes A Bootstrap Based Layout Which Has Been Long Waited For And That Is Sure To AMAZE The phpBB Fan Club.',
'ABOUT_PART_THREE'                        => 'The Unofficial Responsive Theme',
'BB'                                      => 'B',
'BOOTS'                                   => 'BOOTS',
'BBOOTS'                                  => 'BBOOTS',

'BBOOTS_VERSION'                          => '<a href="http://www.sitesplat.com/phpBB3/">BBOOTS</a>',
'U_LOGOUT'                                => 'Logout',

'SITESPLAT_STATISTICS'                    => 'Statistics',
'SITESPLAT_SEE_DETAILS'                   => 'See Details',
'SITESPLAT_SEARCH_LAST_DAY'               => 'Last 24h posts',
'SITESPLAT_SEARCH_WEEK'                   => 'Last 7 days posts',

'SITESPLAT_TOTAL_POSTS'                   => 'Total posts',
'SITESPLAT_TOTAL_TOPICS'                  => 'Total topics',
'SITESPLAT_TOTAL_USERS'                   => 'Total members',
'SITESPLAT_NEWEST_MEMBER'                 => 'Newest Member',
'SITESPLAT_USERS_ONLINE'                  => 'Users Online',
'SITESPLAT_MOST_USERS_ONLINE'             => 'Most Users Online',
'SITESPLAT_BIRTHDAYS'                     => 'Today\'s birthdays',

'BOOTSTRAP_VERSION'                       => '3.3.6',
'FLATBOOTS'                               => 'FLATBOOTS',
'CHANGE_AVATAR'                           => 'Change Avatar',
'CHANGE_PASSWORD'                         => 'Change Password',

'ADMIN_TIPS'                              => 'Admin Tips &amp; Tricks',
'ADMIN_TIP_INTRO'                         => 'Did you know you can make your phpBB forum even more secure with some simple steps?',
'ADMIN_TIP_ONE'                           => 'Keep your software up to-date.',
'ADMIN_TIP_TWO'                           => 'Always use strong passwords that contain random sequence of letters, numbers and special characters.',
'ADMIN_TIP_THREE'                         => 'Restrict the admin folder access...',
'ADMIN_CHECK_IT_BTN'                      => 'Visit SiteSplat.com for more',

'USER_MINI_PROFILE'                       => 'User mini profile',
'USER_MINI_PROFILE_VIEW_FULL'             => 'View full profile',
'OFF_LINE'                                => 'Off-line',
'USER_STATUS'                             => 'Status',
'USER'                                    => 'User',
'TITLE'                                   => 'Title',
'END_TIMELINE'                            => 'End timeline',
'MEMBERS'                                 => 'Members',
'DRAFTS'                                  => 'Drafts',
'REPORTS'                                 => 'Reports',
'MODERATOR_LOGS'                          => 'Moderator logs',
'QUEUE'                                   => 'Queue',
'LINKS'                                   => 'Links',
'TOPIC_PERMISSIONS'                       => 'Topic permissions',
'MODERATOR_OPTIONS'                       => 'Moderate',
'PASSWORD_EXPLAIN_CONFIRM'                => 'Make sure it matches',
'FORUM_REDIRECTS'                         => 'Redirects:',

'FANCY_TOPICS_TITLE'                      => 'Recent topics from the forum',
'POST_BY'                                 => 'Post by',
'REPLY_BY'                                => 'Reply by',
'NO_REPLIES'                              => 'No replies',
'READ_MORE'                               => 'Read more',
'RT_READ_MORE'                            => 'READ MORE',
'VIEW_MORE_TOPICS'                        => 'VIEW MORE TOPICS',
'BACK_TO_START'                           => 'BACK TO START',

'TOGGLE_NAV'                              => 'Toggle Navigation',
'NAVIGATION'                              => 'Navigation',

'DEMO_LINK'                               => 'Demo link no icons',
'DEMO_HEADER_MENU'                        => 'Header intro example',

'FLATBOOTS_INTRO'                         => 'Bootstrap Framework',
'FLATBOOTS_EXPLAIN'                       => 'Over a dozen reusable components built to provide iconography, dropdowns, input groups, navigation, alerts, and much more...',
'CALL_TO_ACTION_FOOTER'                   => 'Swap-in out addons, use only what you really need!',
'PURCHASE_NOW_BTN'                        => 'Purchase now',
'FLATBOOTS_ABOUT_PART_ONE'                => 'Why Would you Settle for Less when you can have More? Do not let other Authors Fool you with Empty Marketing Keywords. FLATBOOTS is what you Deserve. Built to last, Built from Scratch, Nothing Less.',
'FLATBOOTS_ABOUT_TITLE'                   => 'Built to last',
'DMCA'                                    => 'DMCA',
'TERMS'                                   => 'Terms',
'ADVERTISE'                               => 'Advertise',
'SITESPLAT'                               => 'SiteSplat',
'SITESPLAT_URL'                           => '<a href="https://sitesplat.com" class="btn btn-default" target="blank" rel="noopener">SiteSplat.com</a>',
'SS_URL'                                  => '<a href="https://sitesplat.com/" title="SiteSplat Premium Themes" target="_blank" rel="noopener">SiteSplat</a>',
'PHPBB_CREDIT'                            => 'Powered By <a href="https://www.phpbb.com/" title="Forum Software &copy; phpBB&reg; Group" target="_blank" rel="noopener">phpBB</a> and ',
'SS_HANDCRAFTED'                          => '<a href="https://sitesplat.com/" title="SiteSplat Premium Themes and Extensions" target="_blank" rel="noopener">SiteSplat</a>, handcrafted with <i class="fa fa-heart text-flatboots-red"></i> and <i class="fa fa-coffee"></i>',
'JOIN_US_TWITTER'                         => 'Join us on Twitter',
'TWEET_EXAMPLE'                           => 'BBOOTS reaches 2000 sales! Thank-you all for supporting this amazing project and contributing to built the SiteSplat Community. What\'s next? stay tuned and Follow Me on Twitter: <a href="#">http://bit.ly/000fefs</a>',
));