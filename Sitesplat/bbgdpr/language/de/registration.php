<?php
/**
*
* @package BBgdpr
* @copyright (c) 2018 SiteSplat All rights reserved
* @license Proprietary
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
'BULK_EMAILS'                   => 'E-Mails',
'BULK_EMAILS_EXPLAIN'           => 'Durch Aktivieren dieses Kontrollk&auml;stchens stimmen Sie zu, dass Administratoren dieses Boards E-Mails an Sie senden d&uuml;rfen. Die Zulassung ist erforderlich, um die Registrierung zu erm&ouml;glichen. E-Mails werden zur Aktivierung des Forums ben&ouml;tigt oder andere wichtige Sicherheits-E-Mails werden an Benutzer gesendet.',

'PRIVACY_POLICY'                => 'Datenschutzbestimmungen',
'PRIVACY_POLICY_EXPLAIN'        => 'Durch Aktivieren dieses Kontrollk&auml;stchens best&auml;tigen Sie, dass Sie den Datenschutzbestimmungen dieses Forums zustimmen, die gerade auf der Seite mit den Nutzungsbedingungen angezeigt wurden. Sie finden die Datenschutzbestimmungen auch, wenn Sie sich angemeldet haben. Die Zulassung ist erforderlich, um die Registrierung zu erm&ouml;glichen.',
'REG_UNDRSTD'                   => 'Ich verstehe und stimme zu',

'AGREEMENTS_REQUIRED'           => 'Sie m&uuml;ssen Massen E-Mails (es handelt sich um kein Spam) und die Datenschutzbestimmungen zustimmen',

'BULK_EMAILS_QUICK_AGREE'       => 'E-Mails vom Forum',
'PRIVACY_POLICY_QUICK_AGREE'    => 'Forum\'s GDPR',

));