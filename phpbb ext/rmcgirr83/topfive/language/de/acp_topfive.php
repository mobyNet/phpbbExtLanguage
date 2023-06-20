<?php
/**
 *
 * topfive [English]
 *
 * @package language Top Five
 * @copyright (c) 2014 RMcGirr83
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
'TF_ACTIVE'                           => 'Aktiviert',
'TF_AVATARS'                          => 'Avatare',
'TF_AVATARS_EXPLAIN'                  => 'W&auml;hlen Sie Ja oder Nein, um Benutzer-Avatare anzuzeigen',
'TF_TITLE'                            => 'Top Five Einstellungen',
'TOPFIVE_MOD'                         => 'Top Five',
'TF_CONFIG'                           => 'Einstellungen',
'TF_SAVED'                            => '&Auml;nderungen gespeichert',
'TF_HOWMANY'                          => 'Wie viele Beitr&auml;ge',
'TF_EXCLUDED'                         => 'Ausgeschlossene Foren',
'TF_EXCLUDED_EXPLAIN'                 => 'Die IDs der auszuschlie&szlig;enden Foren, getrennt durch ein Komma (Beispiel: 7,9). <br> Wenn Sie ein Forum nicht ausschlie&szlig;en m&ouml;chten, geben Sie einfach 0 ein.',

'TF_HOWMANY_EXPLAIN'                  => 'Wie viele Beitr&auml;ge m&ouml;chten Sie anzeigen ... mindestens 4, maximal 100',
'TF_IGNORE_USERS'                     => 'Inaktive Benutzer ignorieren',
'TF_IGNORE_USERS_EXPLAIN'             => 'Inaktive Benutzer werden in Top-Postern und neuesten Benutzern von der Anzeige ausgeschlossen.',
'TF_IGNORE_FOUNDER'                   => 'Gr&uuml;nder ignorieren',
'TF_IGNORE_FOUNDER_EXPLAIN'           => 'Schlie&szlig;t Gr&uuml;nder von der Anzeige in Top-Postern und neuesten Nutzern aus.',
'TF_LOCATION'                         => 'Ort im Forum',
'TF_LOCATION_EXPLAIN'                 => 'Wo soll der Mod auf der Indexseite angezeigt werden?',
'TF_SHOW_ADMINS_MODS'                 => 'Admins und Mods einbinden',
'TF_SHOW_ADMINS_MODS_EXPLAIN'         => 'Admins und Mods werden in Top-Postern angezeigt',
'TOO_SMALL_TOP_FIVE_HOW_MANY'         => 'Die anzuzeigende Zahl ist zu klein.',
'TOO_LARGE_TOP_FIVE_HOW_MANY'         => 'Die anzuzeigende Zahl ist zu gro&szlig;.',
'TOP_OF_FORUM'                        => 'Oben im Forum',
'BOTTOM_OF_FORUM'                     => 'Am Ende des Forums',
'TOP_OF_ENTIRE_FORUM'                 => 'Oben im gesamten Forum',
'BOTTOM_OF_ENTIRE_FORUM'              => 'Unterseite des gesamten Forums',
//Donation
'PAYPAL_IMAGE_URL'                    => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
'PAYPAL_ALT'                          => 'Spenden mit PayPal',
'BUY_ME_A_BEER_URL'                   => 'https://paypal.me/RMcGirr83',
'BUY_ME_A_BEER'                       => 'Kaufen Sie mir ein Bier f&uuml;r die Erstellung dieser Erweiterung',
'BUY_ME_A_BEER_SHORT'                 => 'Spenden Sie f&uuml;r diese Erweiterung',
'BUY_ME_A_BEER_EXPLAIN'               => 'Diese Erweiterung ist v&ouml;llig kostenlos. Es ist ein Projekt, mit dem ich meine Zeit zum Vergn&uuml;gen und zur Nutzung der phpBB-Community verbringe. Wenn Sie diese Erweiterung gerne verwenden oder Ihr Forum davon profitiert hat, sollten Sie <a href="https://paypal.me/RMcGirr83" target="_blank" rel="noreferrer noopener">mir ein Bier kaufen</ ein>. Es w&uuml;rde sehr gesch&auml;tzt werden. <i class="fa fa-smile-o" style="color:green;font-size:1.5em;" aria-hidden="true"></i> ',
));