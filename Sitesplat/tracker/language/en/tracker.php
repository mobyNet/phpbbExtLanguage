<?php
/**
 *
 * Tracker (FLATBOOTS STYLE ONLY).
 *
 * @copyright (c) 2015 SiteSplat All rights reserved
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


$lang = array_merge($lang, array(
'ADDING_TRACKER_TICKET'                              => 'Adding ticket to  %s - %s',

'BUG_TRACKER'                                        => 'Bug tracker',

'FEATURE_TRACKER'                                    => 'Feature tracker',

'ISSUE_TRACKER'                                      => 'Issue tracker',

'NO_PERMISSION_TRACKER_EDIT'                         => 'You do not have the permission to edit your ticket/post in the tracker.  If you believe this is an error please contact the board administrator.',
'NO_PERMISSION_TRACKER_POST'                         => 'You do not have the permission to post to the tracker.  If you believe this is an error please contact the board administrator.',
'NO_PERMISSION_TRACKER_VIEW'                         => 'You do not have the permission to view the tracker.  If you believe this is an error please contact the board administrator.',
'NO_URL_BUILDER'                                     => 'No URL builder has been set for the tracker api.',

'REPLYING_TRACKER_TICKET'                            => 'Replying to ticket in %s - %s',

'TRACKER'                                            => 'Tracker',
'MY_TICKETS'                                         => 'My tickets',
'MY_ASSIGNED'                                        => 'My assigned tickets',
'TRACKER_ADD_EXPLAIN'                                => 'Thank you for taking time to submit a ticket about the %s project to our %s. Complete the form below to submit your ticket, and please try to include as much information as possible when describing the issue you are sending a ticket about.<br /><br />Please allow at least 24 hours before we respond to your ticket.',
'TRACKER_ADD_EXPLAIN_EMAIL'                          => 'You will be notified by email whenever a team representative makes a change to your ticket, or posts a reply. We will send you a copy of your ticket by email for your records.',
'TRACKER_ALL'                                        => 'All tickets',
'TRACKER_ALL_CLOSED'                                 => 'All closed tickets',
'TRACKER_ALL_OPENED'                                 => 'All open tickets',

'TRACKER_ASSIGNED_TO'                                => 'Assigned to',
'TRACKER_ASSIGNED_TO_USERNAME'                       => 'assigned to %s',
'TRACKER_ASSIGNEES'                                  => 'Assignees',
'TRACKER_ASSIGN_USER'                                => 'Assign to',
'TRACKER_ATTACHMENTS'                                => 'Attachments',
'TRACKER_ATTACHMENTS_ADD'                            => 'Add attachment',
'TRACKER_ATTACHMENTS_UPLOAD'                         => 'Upload attachment',

'TRACKER_BUG'                                        => 'Bug',
'TRACKER_CANNOT_EDIT_TIME'                           => 'You can no longer edit or delete that ticket/post.',
'TRACKER_CHANGELOG_BBCODE'                           => 'BBCode',
'TRACKER_CHANGELOG_EXAMPLE'                          => 'Example output',
'TRACKER_CHANGELOG_HTML'                             => 'HTML',
'TRACKER_CHANGE_PRIORITY'                            => 'Assign priority',
'TRACKER_CHANGE_SEVERITY'                            => 'Assign severity',
'TRACKER_CHANGE_STATUS'                              => 'Assign status',
'TRACKER_CLOSED'                                     => 'Closed',
'TRACKER_COMPONENT'                                  => 'Component',
'TRACKER_COMPONENT_NAME'                             => 'Component Name',
'TRACKER_COMPONENT_STATS'                            => 'Tickets by component',
'TRACKER_CURRENTLY_SHOWING'                          => '<strong>Currently showing:</strong> %s',
'TRACKER_CURRENTLY_SHOWING_USER'                     => '%s tickets, %s',
'TRACKER_CURRENTLY_SHOWING_ASSIGNED'                 => 'Tickets assigned to you',
'TRACKER_DELETE_NO_PERMISSION'                       => 'You do not have the permission to delete tickets/post from the tracker.',
'TRACKER_DELETE_POST'                                => 'Delete post',
'TRACKER_DELETE_POST_CONFIRM'                        => 'Are you sure you want to delete the selected post?',
'TRACKER_DELETE_POST_SUCCESS'                        => 'The selected post was successfully deleted.',
'TRACKER_DELETE_TICKET'                              => 'Delete ticket',
'TRACKER_DELETE_TICKET_CONFIRM'                      => 'Are you sure you want to delete the selected ticket?',
'TRACKER_DELETE_TICKET_SUCCESS'                      => 'The selected ticket was successfully deleted.',
'TRACKER_DESCRIPTION'                                => 'Description',
'TRACKER_DETAILS_VERSION'                            => 'Project version',

'TRACKER_EDIT_REASON'                                => 'Edit reason',
'TRACKER_EDIT_REASON_EXPLAIN'                        => 'Enter the reason you edited the post/ticket',
'TRACKER_EDIT_TICKET'                                => 'Edit ticket',
'TRACKER_EMAIL_SUBJECT'                              => '[%s %s %s - #%s] %s',
'TRACKER_ENVIRONMENT'                                => 'Environment',
'TRACKER_ENVIRONMENT_EXPLAIN'                        => 'This information about your environment may provide us with additional details that can help us in solving this ticket',
'TRACKER_EVERYONES_ASSIGNED_TICKETS'                 => 'All tickets',
'TRACKER_EVERYONES_TICKETS'                          => 'Everyone\'s tickets',
'TRACKER_FILTER_COMPONENT'                           => ', component %s',
'TRACKER_FILTER_TICKET'                              => 'Filter tickets',
'TRACKER_FILTER_VERSION'                             => ', version %s',

'TRACKER_HIDE_TICKET'                                => 'Hide ticket',
'TRACKER_HIDE_TICKET_CONFIRM'                        => 'Are you sure you want to hide this ticket?',
'TRACKER_HIDE_TICKET_HISTORY'                        => 'Hide ticket history',
'TRACKER_HISTORY_ACTION_BY'                          => 'Action performed by %s » %s',
'TRACKER_HISTORY_ASSIGNED_TO'                        => 'Assigned ticket to user "%s"',
'TRACKER_HISTORY_ASSIGNED_TO_GROUP'                  => 'Assigned ticket to group "%s"',
'TRACKER_HISTORY_PRIORITY_CHANGED'                   => 'Changed ticket severity from "%s" to "%s"',
'TRACKER_HISTORY_SEVERITY_CHANGED'                   => 'Changed ticket priority from "%s" to "%s"',
'TRACKER_HISTORY_STATUS_CHANGED'                     => 'Changed ticket status from "%s" to "%s"',
'TRACKER_HISTORY_UNASSIGNED'                         => 'Removed assigned user from ticket',
'TRACKER_IMPLEMENTED_CVS'                            => 'Implemented in CVS',
'TRACKER_IMPLEMENTED_SVN'                            => 'Implemented in SVN',
'TRACKER_IMPLEMENTED_VCS'                            => 'Implemented in VCS',
'TRACKER_IMPLEMENTING'                               => 'Implementing',
'TRACKER_INDEX'                                      => 'Tracker index',
'TRACKER_INVALID'                                    => 'Invalid',
'TRACKER_IS_CLOSED_STATUS'                           => 'Is "Closed" Status',
'TRACKER_LAST_POST_BY'                               => 'Last post by %s » %s',
'TRACKER_LAST_VISIT'                                 => '<strong>Ticket last visited by:</strong> %s on %s',
'TRACKER_LIST_ALL_TICKETS'                           => 'List all tickets',
'TRACKER_LOCK_TICKET'                                => 'Lock ticket',
'TRACKER_LOCK_TICKET_CONFIRM'                        => 'Are you sure you want to lock this ticket?',
'TRACKER_MOVED_RETURN'                               => '%sReturn to old project%s',
'TRACKER_MOVE_TICKET'                                => 'Move ticket',
'TRACKER_MOVE_TICKET_CONFIRM'                        => 'Once moved the assigned user, status, component, version, priority, serverity, and ticket history will be reset. Are you sure you want to move the selected ticket to the selected project?',
'TRACKER_MOVE_TICKET_SELECT'                         => 'Select a destination project',
'TRACKER_MY_ASSIGNED_TICKETS'                        => 'My assigned tickets',
'TRACKER_MY_TICKETS'                                 => 'My tickets',
'TRACKER_NAV_TICKET'                                 => 'Ticket #',

'TRACKER_NOT_ENOUGH_PROJECTS'                        => 'There aren´t enough projects for your requested action.',
'TRACKER_NO_CHANGELOG'                               => 'There is no changelog for this version.',
'TRACKER_NO_PROJECT_EXIST'                           => 'There are currently no projects in the tracker.',
'TRACKER_NO_STATUS_EXIST'                            => 'There are currently no status type in the tracker.',
'TRACKER_NO_TICKETS'                                 => 'There are no tickets to display',

'TRACKER_POSTED_ON_DATE'                             => '%s » %s',
'TRACKER_POST_BY_AUTHOR'                             => 'Posted by %s » %s',
'TRACKER_POST_NO_EXIST'                              => 'The selected post does not exist.',
'TRACKER_POST_TICKET'                                => 'Post a new ticket',
'TRACKER_PREVIEW'                                    => 'Preview',
'TRACKER_PREVIEW_REPLY'                              => 'Preview reply',
'TRACKER_PREVIEW_TICKET'                             => 'Preview ticket',
'TRACKER_PREVIOUS_POSTS'                             => 'Previous posts',
'TRACKER_PRIORITY'                                   => 'Priority',
'TRACKER_PRIORITY1'                                  => 'Immediate',
'TRACKER_PRIORITY2'                                  => 'Urgent',
'TRACKER_PRIORITY3'                                  => 'High',
'TRACKER_PRIORITY4'                                  => 'Normal',
'TRACKER_PRIORITY5'                                  => 'Low',
'TRACKER_PROJECTS'                                   => 'Please select the project you would like to open below. Tracker statistics are available by visiting this page %sHERE%s.',
'TRACKER_PROJECT_INFO'                               => 'Project information',
'TRACKER_PROJECT_NAME'                               => 'Project',
'TRACKER_PROJECT_NAME_TITLE'                         => 'Project name',
'TRACKER_PROJECT_NO_EXIST'                           => 'The selected project does not exist.',
'TRACKER_PROJECT_RETURN'                             => '%sReturn to current project%s',
'TRACKER_TICKET_RETURN'                              => '%sReturn to original topic%s',
'TRACKER_REPLY'                                      => 'Reply to ticket',
'TRACKER_TICKET_LOCKED'                              => 'Ticket Locked',
'TRACKER_REPLY_DETAIL'                               => 'Make sure that the reply to this ticket contains all necessary information and click "Submit reply" to submit your reply.',
'TRACKER_REPLY_DETAIL_EMAIL'                         => 'The relevant team members and the poster of this ticket will be notified by email.',
'TRACKER_REPLY_EXPLAIN'                              => 'Use the form below to post a reply to the ticket "%s".',
'TRACKER_REPLY_RETURN'                               => '%sReturn to current ticket%s',
'TRACKER_REPORTED_BY'                                => 'Reported by',
'TRACKER_REPORTED_ON'                                => 'Reported on',
'TRACKER_REPORTERS_TICKETS'                          => 'Reporter\'s tickets',
'TRACKER_RESEARCHING'                                => 'Researching',
'TRACKER_RETURN'                                     => '%sReturn to the tracker index page%s',

'TRACKER_SEARCH_DESCRIPTION'                         => 'Enter search terms',
'TRACKER_SECURITY_TICKET'                            => 'Security ticket',
'TRACKER_SELECT'                                     => '(select)',
'TRACKER_SEND_PM'                                    => 'Send PM',
'TRACKER_SEVERITY'                                   => 'Severity',
'TRACKER_SEVERITY1'                                  => 'Critical',
'TRACKER_SEVERITY2'                                  => 'Major',
'TRACKER_SEVERITY3'                                  => 'Normal',
'TRACKER_SEVERITY4'                                  => 'Minor',
'TRACKER_SEVERITY5'                                  => 'Trivial',
'TRACKER_STATISTICS'                                 => 'Please select the project of which you want to view the statistics below.',
'TRACKER_STATS'                                      => 'Tracker Statistics',
'TRACKER_STATUS'                                     => 'Status',
'TRACKER_STATUS_NAME'                                => 'Status Name',
'TRACKER_SUBMITTED_RETURN'                           => '%sView your submitted ticket%s',
'TRACKER_SUBMIT_A_TICKET'                            => 'Submit a ticket',
'TRACKER_SUBMIT_REPLY'                               => 'Submit reply',
'TRACKER_SUBMIT_TICKET'                              => 'Submit ticket',
'TRACKER_SUBMIT_TICKET_EXPLAIN'                      => 'Ready to submit your ticket? Please ensure that you have provided sufficient information for us to be able to quickly assist you without having to contact you for further information. The more information you have provided, the faster we can process this ticket.',

'TRACKER_TICKET'                                     => 'Ticket',
'TRACKER_TICKETS'                                    => 'Tickets',
'TRACKER_TICKET_COMMENTS'                            => 'Comments',
'TRACKER_TICKET_DBMS'                                => 'Database system (optional)',
'TRACKER_TICKET_DBMS_DETAIL'                         => 'Database system',
'TRACKER_TICKET_DBMS_EXPLAIN'                        => 'The database system you are using',
'TRACKER_TICKET_DBMS_EXPLAIN_BAD'                    => '<strong class="text-danger">Bad:</strong> MySQL, phpMyAdmin 2.9.1.1, version 5',
'TRACKER_TICKET_DBMS_EXPLAIN_GOOD'                   => '<strong class="text-success">Good:</strong> MySQL 5.0.27',
'TRACKER_TICKET_DESC'                                => 'Ticket description',
'TRACKER_TICKET_DESC_ERROR'                          => 'Your description contains too few characters',
'TRACKER_TICKET_DESC_EXPLAIN'                        => 'Your actual report. Please try to be as detailed as possible; the more information you provide, the faster we can help you.',
'TRACKER_TICKET_DETAILS'                             => 'Ticket details',
'TRACKER_TICKET_HIDDEN_FROM_VIEW'                    => 'This ticket is hidden from public view.  It is only viewable by project members.',
'TRACKER_TICKET_HISTORY'                             => 'History',
'TRACKER_TICKET_ID'                                  => 'Ticket ID',
'TRACKER_TICKET_LOCKED_MESSAGE'                      => 'This ticket is locked, you cannot edit posts or make further replies.',
'TRACKER_TICKET_MESSAGE_ERROR'                       => 'Your message contains too few characters.',
'TRACKER_TICKET_MOVED'                               => 'The selected ticket has been successfully moved',
'TRACKER_TICKET_NO_COMMENTS'                         => 'No comments have been made',
'TRACKER_TICKET_NO_EXIST'                            => 'The selected ticket does not exist.',
'TRACKER_TICKET_NO_HISTORY'                          => 'No history available',
'TRACKER_TICKET_PHP'                                 => 'PHP version (optional)',
'TRACKER_TICKET_PHP_DETAIL'                          => 'PHP version',
'TRACKER_TICKET_PHP_EXPLAIN'                         => 'The PHP version your server is using',
'TRACKER_TICKET_PHP_EXPLAIN_BAD'                     => '<strong class="text-danger">Bad:</strong> Version 4, XAMPP 1.5.5, Windows XP, latest',
'TRACKER_TICKET_PHP_EXPLAIN_GOOD'                    => '<strong class="text-success">Good:</strong> 5.3.10',
'TRACKER_TICKET_REPLY_SUBMITTED'                     => 'Your post has been successfully submitted',
'TRACKER_TICKET_SECURITY_FROM_VIEW'                  => 'This ticket is a security ticket and is hidden from public view.  It is only viewable by project members and the original poster.',
'TRACKER_TICKET_STATUS_OVERVIEW'                     => 'Ticket status overview',
'TRACKER_TICKET_SUBMITTED'                           => 'Your ticket has been successfully submitted.',
'TRACKER_TICKET_TITLE'                               => 'Title',
'TRACKER_TICKET_TITLE_ERROR'                         => 'You must enter a title when posting a ticket.',
'TRACKER_TICKET_TITLE_EXPLAIN'                       => 'A short, descriptive, title for your ticket',
'TRACKER_TICKET_TITLE_EXPLAIN_BAD'                   => '<strong class="text-danger">Bad:</strong> Exploit found',
'TRACKER_TICKET_TITLE_EXPLAIN_GOOD'                  => '<strong class="text-success">Good:</strong> $website variable is not being escaped properly in memberlist.php',
'TRACKER_TICKET_UPDATED'                             => 'The ticket has been successfully updated.',
'TRACKER_TOP_REPORTERS_TITLE'                        => 'Top %s reporters',
'TRACKER_TOTAL_CLOSED_TICKETS'                       => 'Total Closed Tickets',
'TRACKER_TOTAL_OPEN_TICKETS'                         => 'Total Open Tickets',
'TRACKER_TOTAL_TICKETS'                              => 'Total Tickets',
'TRACKER_TYPE'                                       => 'Type',
'TRACKER_UNASSIGNED'                                 => '(unassigned)',
'TRACKER_UNHIDE_TICKET'                              => 'Unhide ticket',
'TRACKER_UNHIDE_TICKET_CONFIRM'                      => 'Are you sure you want to unhide this ticket?',
'TRACKER_UNKNOWN'                                    => '(unknown)',
'TRACKER_UNLOCK_TICKET'                              => 'Unlock ticket',
'TRACKER_UNLOCK_TICKET_CONFIRM'                      => 'Are you sure you want to unlock this ticket?',

'TRACKER_UNSECURITY_TICKET'                          => 'Normal ticket',
'TRACKER_UNWATCH_PROJECT'                            => 'Unsubscribe from project',
'TRACKER_UNWATCH_TICKET'                             => 'Unsubscribe from ticket',
'TRACKER_UPDATED_RETURN'                             => '%sView updated ticket%s',
'TRACKER_USERNAME'                                   => 'Name',
'TRACKER_USER_CANNOT_EDIT'                           => 'You cannot edit tickets/posts in this project.',
'TRACKER_VERSION'                                    => 'Version',
'TRACKER_VERSION_CHANGELOG'                          => '%s - Changes since %s',
'TRACKER_VERSION_NAME'                               => 'Version Name',
'TRACKER_VERSION_STATS'                              => 'Tickets by version',
'TRACKER_VERSION_VIEW_CHANGELOG'                     => 'View changelog',
'TRACKER_VIEW_STATISTICS'                            => 'View statistics',
'TRACKER_VIEW_TICKET_HISTORY'                        => 'View ticket history',
'TRACKER_WATCH_PROJECT'                              => 'Subscribe to project',
'TRACKER_WATCH_TICKET'                               => 'Subscribe to ticket',
'TRACKER_STATS'                                      => 'Statistics',
'TRACKER_SECURITY_EXPLAIN'                           => '<small>- (Select this if you would like selected tickets to be shown only to team members and the user that posted it)</small>',

'TRACKER_FILTER_FILTER_BY'                           => 'Filter by Status',
'TRACKER_FILTER_VERSION'                             => 'Filter by Version',
'TRACKER_FILTER_COMPONENT'                           => 'Filter by Component',


// tracker status labels //
'TRACKER_UNREPRODUCIBLE'                             => '<small class="label label-danger reset-label">Unreproducible</small>',
'TRACKER_FIX_COMPLETED'                              => '<small class="label label-success reset-label">Fix completed</small>',
'TRACKER_FIX_COMPLETED_CVS'                          => '<small class="label label-success reset-label">Fix completed in CVS</small>',
'TRACKER_FIX_COMPLETED_SVN'                          => '<small class="label label-success reset-label">Fix completed in SVN</small>',
'TRACKER_FIX_COMPLETED_VCS'                          => '<small class="label label-success reset-label">Fix completed in VCS</small>',
'TRACKER_FIX_IN_PROGRESS'                            => '<small class="label label-warning reset-label">Fix in progress</small>',
'TRACKER_WILL_NOT_FIX'                               => '<small class="label label-danger reset-label">Will not fix</small>',
'TRACKER_WILL_NOT_IMPLEMENT'                         => '<small class="label label-danger reset-label">Will not implement</small>',
'TRACKER_PENDING'                                    => '<small class="label label-warning reset-label">Pending</small>',
'TRACKER_AWAITING_INFO'                              => '<small class="label label-default reset-label">Awaiting information</small>',
'TRACKER_AWAITING_INPUT'                             => '<small class="label label-default reset-label">Awaiting team input</small>',
'TRACKER_REVIEWED'                                   => '<small class="label label-default reset-label">Reviewed</small>',
'TRACKER_ALREADY_FIXED'                              => '<small class="label label-success reset-label">Already fixed</small>',
'TRACKER_DUPLICATE'                                  => '<small class="label label-warning reset-label">Duplicate</small>',
'TRACKER_SUPPORT_REQUEST'                            => '<small class="label label-default reset-label">Support request</small>',
'TRACKER_NEW'                                        => '<small class="label label-info reset-label">New</small>',
'TRACKER_NOT_A_BUG'                                  => '<small class="label label-inverse reset-label">Not a bug</small>',
'TRACKER_REVIEW_LATER'                               => '<small class="label label-default reset-label">Review later</small>',



'VIEWING_TRACKER'                                    => 'Viewing tracker',
'VIEWING_TRACKER_PROJECT'                            => 'Viewing %s - %s',
'VIEWING_TRACKER_STATISTICS'                         => 'Viewing tracker statistics for %s - %s',
'VIEWING_TRACKER_STATISTICS_ALL'                     => 'Viewing tracker statistics',
'VIEWING_TRACKER_TICKET'                             => 'Viewing ticket for %s - %s',

'CHOOSE_PROJECT'                                     => 'Choose project',
));

// in case add_lang is called twice
if (!function_exists('tracker_format_username')) {
	/**
	 * Format a username correctly on localised basis
	 */
	function tracker_format_username($username)
	{
		if (in_array(strtolower(substr($username, -1, 1)), array('s', 'x', 'z'), true)) {
			return $username . '\'';
		} else {
			return $username . '\'s';
		}
	}
}
?>