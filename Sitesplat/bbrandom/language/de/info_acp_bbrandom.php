<?php
/**
*
* @package BBrandom
* @copyright (c) 2016 SiteSplat All rights reserved
* @license Proprietary
*
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
'ALLOW_RGRAVATAR'                           => 'Erlaube Random Gravatars',
'DEFAULT_RGRAVATAR'                         => 'Setzt Random Gravatars Standartgemäß für neue Benutzer fest',
'DEFAULT_RGRAVATAR_EXPLAIN'                 => 'Dadurch wird ein zufälliges Gravatar für neu registrierte Benutzer zugewiesen.<br/>Diese Option ist auch unter UCP verfügbar &#62; Profil &#62; Avatar bearbeiten',
'DEFAULT_CUAVATAR'                          => 'Setze die benutzerdefinierten Avatare-Standardmäßig für neue Benutzer fest',
'DEFAULT_CUAVATAR_EXPLAIN'                  => 'Laden Sie unter <strong>root/images/avatars/random/</strong>Bilder hoch, die zufällig ausgewählt werden sollen, bevor Sie diese Funktion verwenden!<br/> Dies gilt nur für neu registrierte Benutzer und ist unter UCP nicht verfügbar &#62; Profil &#62; Avatar bearbeiten',
'DEFAULT_RGRAVATAR_STYLE'                   => 'Standard-Zufallsgravatar-Design/Typ',

'SS_HELPER_NOTY'                            => 'SiteSplat BBcore existiert nicht!<br/>Laden Sie das <a href="https://sitesplat.com" target="_blank">BBcore</a> herunter und kopieren Sie den BBcore-Ordner in Ihren SiteSplat-Erweiterungsordner.',
'BBRANDOM_NOTICE'                           => '<div class="phpinfo"><p>Die Einstellungen für diese Erweiterung sind in <strong>ACP &#62; Board Einstellungen &#62; Avatar Einstellungen</strong><br>Also in: <strong>ACP &#62; Benutzer und Gruppen &#62; Benutzer verwalten &#62; Benutzerverwaltung &#62;</strong> Wählen Sie einen Benutzer aus über das Dropdown-Menü oben Rechts. Klicken Sie dann auf "Avatar". <br />Jeder Benutzer kann auch wählen, ob er oder sie einen zufälligen Avatar verwenden möchte<strong> UCP &#62; Benutzer Profil &#62; Avatar bearbeiten</strong>. Benutzerdefinierte Bilder müssen nach <strong>root/images/avatars/random/</strong> Hochgeladen werden</p></div>',
'BBRANDOM_SITESPLAT'                        => '<i class="fa fa-info-circle"></i>Erweiterung für zufällige Avatare von <a href="http://www.sitesplat.com" title="Professional Web Entwicklung"><strong>SiteSplat. com</strong></a>für<a href="https://themeforest.net/user/themesplat/portfolio?ref=ThemeSplat" title="Professional Premium Themes"><strong> SiteSplat-Themes</strong></a>',
));

// Description of extension
$lang = array_merge($lang, array(
'DESCRIPTION_PAGE'                          => 'Beschreibung',
'DESCRIPTION_NOTICE'                        => 'Extension Notiz',
'ext_details' => array(
'details' => array(
'DESCRIPTION_1'                             => 'Random Gravatars',
'DESCRIPTION_2'                             => 'Für jeden Benutzer',
'DESCRIPTION_3'                             => 'Gehostet bei gravatar.com',
),
'note' => array(
'NOTICE_1'                                  => 'phpBB 3.2 bereit'
)
)
));
