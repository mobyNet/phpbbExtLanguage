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
'OBSCUREREGISTRATIONCODE_CONFIG'                        => 'Obscure Registration Code',
'OBSCUREREGISTRATIONCODE_CONFIG_EXPLAIN'                => 'Set the Registration Code to be used in the built in phpBB Q&A CAPTCHA.<br />It will be  displayed in a way that is hard for SPAMbots to access but easy for humans to read.<br />Before proceeding further you MUST read the Instructions and FAQ in the readme.txt by following this',
'OBSCUREREGISTRATIONCODE_CONFIG_SET'                    => 'Configuration',
'OBSCUREREGISTRATIONCODE_CONFIG_SAVED'                  => 'Obscure Registration Code settings saved',

'RANDOMGENERATOR'                                       => 'Random Code Generator',
'CREATE'                                                => 'Create New Code',
'COPY'                                                  => 'Copy to Clipboard',

'OBSCUREREGISTRATIONCODE'                               => 'Registration Code',
'OBSCUREREGISTRATIONCODE_EXPLAIN'                       => 'Enter the code you created above.<br />Remember to add this code to the Q&A CAPTCHA settings.',

'OBSCUREREGISTRATIONCODE_DIV'                           => 'Additional SPAMbot Resistance first layer',
'OBSCUREREGISTRATIONCODE_ORC'                           => 'Additional SPAMbot Resistance second layer',
'OBSCUREREGISTRATIONCODE_CODE_EXPLAIN'                  => 'I recommend that you change this field to increase the SPAMbot resistance of this extension.',
'OBSCUREREGISTRATIONCODE_CODE_LETTERS'                  => 'No Numbers, spaces or special characters.',

'OBSCUREREGISTRATIONCODE_BG_ON'                         => 'Colour the Registration Code Background',
'OBSCUREREGISTRATIONCODE_BG_ON_EXPLAIN'                 => 'If set to ’NO’ you may need to change the default font colour',

'OBSCUREREGISTRATIONCODE_BG'                            => 'Registration Code Background Colour',
'OBSCUREREGISTRATIONCODE_BG_EXPLAIN'                    => 'Select the Registration Code Background Colour',
'OBSCUREREGISTRATIONCODE_COLOUR'                        => 'Click box to select the Colour',
'OBSCUREREGISTRATIONCODE_HASH'                          => '#',

'OBSCUREREGISTRATIONCODE_FONT'                          => 'Registration Code Font Colour',
'OBSCUREREGISTRATIONCODE_FONT_EXPLAIN'                  => 'Select the Registration Code Font Colour',

'OBSCUREREGISTRATIONCODE_SIZE'                          => 'Registration Code Font Size',
'OBSCUREREGISTRATIONCODE_SIZE_EXPLAIN'                  => 'Set the Registration Code Font Size in px',
));