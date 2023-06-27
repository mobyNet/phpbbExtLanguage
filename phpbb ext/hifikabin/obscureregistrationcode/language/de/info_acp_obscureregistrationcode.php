<?php
/**
 *
 * @package phpBB Extension - Obscure Contact Us
 * @copyright (c) 2015 - HiFiKabin
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

if (!defined('IN_PHPBB')) {
	exit;
}
if (empty($lang) || !is_array($lang)) {
	$lang = array();
}

$lang = array_merge($lang, array(
'ACP_OBSCUREREGISTRATIONCODE'                 => 'Obscure Registrierungscode',
'ACP_OBSCUREREGISTRATIONCODE_CONFIG'          => 'Obscure Registrierungscode Konfiguation',

'ACP_OBSCUREREGISTRATIONCODE_SAVED'           => 'Obscure Registrierungscode Konfiguation gespeichert',
));