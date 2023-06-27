<?php
/**
 *
 * @package phpBB Extension - Obscure Registration Code
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
'REGISTRATIONCODE'      => 'Registrierungscode anzeigen',
'NOSCRIPT'              => 'Sie müssen Javascript aktivieren, um den Registrierungscode zu sehen',
'COPYCODE'              => 'Kopie',
));