<?php
/**
*
* common [English]
*
* @package language
* @version 1.0.1
* @copyright (c) 2013 SiteSplat, (c) ThemeSplat
* @license htp://www.sitesplat.com/
*
*/

/**
* DO NOT CHANGE
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
	'TRANSLATION_INFO'					=> '&Uuml;bersetzt von Moby2006</a>.',

	'ABOUT_US_TITLE'            		=> 'Titel &Uuml;ber uns ',
	'ABOUT_US'            				=> 'Body &Uuml;ber uns ',
	'TEASER_TITLE'            			=> 'Kurzer Titel',
	'TEASER_TEXT'            			=> 'Kurzer Text',
	'GOOGLE_ANALYTICS'          		=> 'Google Analytics',
	'TWITTER_SCREEN_NAME'            	=> 'Twitter Name',
	'TWITTER_ID'            			=> 'Twitter ID',
	'ADSENSE_HEADER'            		=> 'Werbeanzeigen im Kopfbereich',
	'ADSENSE_FOOTER'            		=> 'Werbeanzeigen im Fussbereich',
	'ADSENSE_TOPIC'            			=> 'Werbeanzeigen Thema',
	'LOGO_TEXT'                 		=> 'Logo Text',
	'HIDE_HEADER'              			=> 'Untertitel ausblenden',
	'HIDE_FOOTER'              			=> 'Fu&szlig;zeile ausblenden',
	'ENABLE_POPUP_LOGIN'				=> 'Modale Anmeldung aktivieren',
	'AVATAR_EFFECT'						=> 'Avatar-Effekte im Thema',
	'MINI_PROFILE_POSITION'				=> 'Position des Mini-Benutzerprofils',

	'CALL_ENABLED'					    => '(CtA) Leiste aktivieren',
	'CALL_ONLY_REGISTERED'	            => 'CtA-Leiste nur f&uuml;r registrierte Benutzer anzeigen',
	'CALL_TEXT'							=> 'CtA Text',
	'CALL_BUTTON_TEXT'			        => 'CtA button Text',
	'CALL_LINK'							=> 'CtA button URL',

	// Descriptions for Config page
	'ABOUT_US_TITLE_EXPLAIN'   	  	  	=> 'Geben Sie den Titel f&uuml;r den About us Block ein',
	'ABOUT_US_EXPLAIN'          		=> 'Geben Sie den Text f&uuml;r den Body des About us Blocks ein. HTML-Tags sind erlaubt',
	'TEASER_TITLE_EXPLAIN'          	=> 'Geben Sie den Text f&uuml;r den Titel des Teasers in den Board-Header ein. Leer lassen f&uuml;r Standard-Teasertitel. Bitte beachten Sie, dass nur Klartext erlaubt ist.',
	'TEASER_TEXT_EXPLAIN'          		=> 'Geben Sie den Text f&uuml;r den Teaser in den Board-Header ein. Leer lassen f&uuml;r Standard-Teasertext. Bitte beachten Sie, dass nur Klartext erlaubt ist.',
	'GOOGLE_ANALYTICS_EXPLAIN'  		=> 'Geben Sie den vollst&auml;ndigen Google Analytics-Code ein. Beinhaltet die Script Tags etc.',
	'TWITTER_SCREEN_NAME_EXPLAIN'       => 'Geben Sie Ihren Twitter-Benutzernamen ein.',
	'TWITTER_ID_EXPLAIN'        		=> 'Geben Sie Ihre Twitter-ID ein. Befolgen Sie zum Abrufen Ihrer Nummer die Anweisungen in der Dokumentation. ',
	'ADSENSE_HEADER_EXPLAIN'    		=> 'Geben Sie Ihren Google Adsense-Codeblock oder Ihren Banner-HTML-Code ein. Dies wird in der Forum HEADER Sektion gezeigt.',
	'ADSENSE_FOOTER_EXPLAIN'    		=> 'Geben Sie Ihren Google Adsense-Codeblock oder Ihren Banner-HTML-Code ein. Dies wird in der FOOTER-Sektion des Forums gezeigt.',
	'ADSENSE_TOPIC_EXPLAIN'     		=> 'Geben Sie Ihren Google Adsense-Codeblock oder Ihren Banner-HTML-Code ein. Dies wird in den Themen &quot;nach dem ersten Beitrag&quot; Seite gezeigt',
	'LOGO_TEXT_EXPLAIN'        	 		=> 'Geben Sie Ihren Logotext ein',
	'HIDE_HEADER_EXPLAIN'    			=> 'Versteckt den Subheader-Bereich, wo die Suchleiste angezeigt wird',
	'HIDE_FOOTER_EXPLAIN'    			=> 'Versteckt den FOOTER-Block und alle darin enthaltenen Elemente',
	'ENABLE_POPUP_LOGIN_EXPLAIN'		=> 'Dies aktiviert die modale Anmeldung f&uuml;r das Forum',
	'AVATAR_EFFECT_EXPLAIN'				=> '&Auml;ndert den Avatar-Frame-Stil',
	'MINI_PROFILE_POSITION_EXPLAIN'		=> '&Auml;ndert die Position des Benutzer-Miniprofils in Topics.',

	'BBOOTS_STYLE_TITLE'				=> 'BBOOTS Mini CMS',
	'BBOOTS_STYLE_CONFIG'				=> 'Allgemeine Konfiguration',
	'BBOOTS_STYLE_BUTTONS'				=> 'Einstellungen f&uuml;r das Header-Men&uuml;',
	'BBOOTS_STYLE_UPLOAD'				=> 'Logo &#38; Hintergrund',
	'BBOOTS_STYLE_LINKS'				=> 'Top links',
	'BBOOTS_STYLE_SOCIAL'				=> 'Soziale Netzwerke',
	'BBOOTS_STYLE_CSS'					=> 'Benutzerdefiniertes CSS',

	'BBOOTS_STYLE_ADD_BUTTON'			=> 'Neuen Button hinzuf&uuml;gen',
    'BBOOTS_STYLE_EDIT_BUTTON'     		=> 'Button bearbeiten ',
	'MENU_BUTTON_NAME'	       			=> 'Button Name',
	'MENU_BUTTON_NAME_EXPLAIN' 			=> 'Sie k&ouml;nnen text oder eine Sprachvariable wie {L_PRIVATE_MESSAGES} verwenden.',
	'MENU_BUTTON_DESC'	      		    => 'Button Beschreibung',
	'MENU_BUTTON_DESC_EXPLAIN' 			=> 'Text unterhalb des Button Titel',
	'MENU_BUTTON_URL'		      	    => 'URL',
	'MENU_BUTTON_ICON_EXPLAIN'		    => '',
	'MENU_BUTTON_URL_EXPLAIN'	 		=> 'Sie k&ouml;nnen eine URL-Adresse einschlie&szlig;lich http:// Protokoll- oder Template Variable wie {U_PRIVATEMSGS} verwenden. Sie finden die verf&uuml;gbaren Template Variablen in der Datei includes/functions.php in Zeile 4545',
	'MENU_DISPLAY'			      	    => 'Button anzeigen',
	'MENU_EXTERNAL'			       	    => 'Link wird in neuem Fenster ge&ouml;ffnet',
	'MENU_ONLY_REGISTERED'    		    => 'Nur f&uuml;r registrierte Benutzer anzeigen',
	'MENU_ONLY_GUEST'          			=> 'Nur f&uuml;r G&auml;ste anzeigen',
	'MENU_BUTTON_PARENT'       			=> '&Uuml;bergeordneter Button',
	'MENU_BUTTON_PARENT_EXPLAIN' 		=> 'W&auml;hlen Sie die &uuml;bergeordneter Button, wenn Sie einen Dropdown-Bereich haben m&ouml;chten',
	'MOVE_BUTTON_WITH_SUBS'    			=> 'Dieser Button kann kein Sub-Button sein, da sie bereits Sub-Button enth&auml;lt.',
	'MENU_NAV'         	       			=> 'Menu',
	'MENU_ICON'          			 	=> 'Icon',
	'DELETE_BUTTON_CONFIRM'    			=> 'M&ouml;chten Sie diesen Button wirklich l&ouml;schen?',
	'DELETE_SUBBUTTONS_CONFIRM'			=> 'M&ouml;chten Sie diesen Button und alle Unter-Buttons wirklich l&ouml;schen?',
	'NO_BUTTONS'               			=> 'Es gibt keine Button zum Verwalten',
	'NO_SUBBUTTONS'            			=> 'Es gibt keine Unter-Button zum Verwalten',
	'BUTTON_UPDATED'           			=> 'Button wurde erfolgreich aktualisiert',
	'BUTTON_ADDED'             			=> 'Neue Button wurde erfolgreich hinzugef&uuml;gt',

	'ENABLE_CUSTOM_LINKS'				=> 'Standard Erweiterung f&uuml;r Men&uuml;eintr&auml;ge aktivieren',
	'ENABLE_CUSTOM_LINKS_EXPLAIN'		=> 'Diese Option aktiviert oder deaktiviert den Hauptmen&uuml;-Erweiterung Button, &uuml;ber die normalerweise alle Standard-Erweiterungslinks &uuml;ber das phpBB-Event System hinzugef&uuml;gt werden.',
	'CONFIGURATION_UPDATED'				=> 'Konfiguration erfolgreich aktualisiert.',

	'IMG_UPLOADED'              		=> 'Bild wurde erfolgreich hochgeladen',
	'SELECT_IMAGE'              		=> 'Bild ausw&auml;hlen',
	'IMG_UPLOAD_EXPLAIN'        		=> 'Zul&auml;ssige Bilder sind png, jpg, jpeg und gif.',
	'IMG_UPLOAD_ERROR'          		=> 'Nur die Bilder png, jpg, jpeg und gif sind erlaubt.',

	'IMAGE_LOGO' 						=> 'Site logo',
	'IMAGE_BG' 							=> 'Hintergrund Bild des Forums',
	'CHECK_TO_DELETE' 					=> 'Zum L&ouml;schen markieren und dann die L&ouml;schtaste dr&uuml;cken',
	'IMAGE_DELETED' 					=> 'Bild wurde erfolgreich gel&ouml;scht',
	'CHECK_TO_UPLOAD_BG' 				=> 'Nur zum Hochladen des Forum-Hintergrund Bild aktivieren (f&uuml;r das Site-Logo nicht erforderlich)',

	'BBOOTS_STYLE_ADD_LINK'			    => 'Link hinzuf&uuml;gen',
    'BBOOTS_STYLE_EDIT_LINK'		    => 'Link bearbeiten',
	'MENU_LINK_NAME'	       			=> 'Link Name',
	'MENU_LINK_NAME_EXPLAIN' 			=> 'Sie k&ouml;nnen einfachen Text oder eine Sprachvariable wie {L_PRIVATE_MESSAGES} verwenden.',
	'MENU_LINK_URL'		       			=> 'URL',
	'MENU_LINK_URL_EXPLAIN'	 			=> 'Sie k&ouml;nnen eine URL-Adresse einschlie&szlig;lich http:// Protokoll- oder Template Variable wie {U_PRIVATEMSGS} verwenden. Sie finden die verf&uuml;gbaren Template Variablen in der Datei includes/functions.php in Zeile 4545',
	'MENU_LINK_DISPLAY'			        => 'Link anzeigen',
	'MENU_LINK_EXTERNAL'			    => 'Link wird in einem neuen Fenster ge&ouml;ffnet',
	'MENU_LINK_ONLY_REGISTERED'   		=> 'Nur f&uuml;r registrierte Benutzer anzeigen',
	'MENU_LINK_ONLY_GUEST'        		=> 'Nur f&uuml;r G&auml;ste anzeigen',
	'MENU_LINK_NAV'         	    	=> 'Links',
	'MENU_LINK_ICON'          			=> 'Icon',
	'DELETE_LINK_CONFIRM'    			=> 'M&ouml;chten Sie diesen Link wirklich l&ouml;schen?',
	'NO_LINKS'               			=> 'Es gibt keinen Link zu Verwalten',
	'LINK_UPDATED'           			=> 'Link wurde erfolgreich aktualisiert',
	'LINK_ADDED'             			=> 'Neuer Link wurde erfolgreich hinzugef&uuml;gt',

	'BBOOTS_STYLE_ADD_SOCIAL'		=> 'Soziales Netzwerk hinzuf&uuml;gen',
    'BBOOTS_STYLE_EDIT_SOCIAL'		=> 'Soziales Netzwerk bearbeiten',
	'MENU_SOCIAL_NAME'	       			=> 'Name des sozialen Netzwerks',
	'MENU_SOCIAL_NAME_EXPLAIN' 			=> 'Sie k&ouml;nnen text oder eine Sprachvariable wie {L_PRIVATE_MESSAGES} verwenden.',
	'MENU_SOCIAL_URL'		       		=> 'URL',
	'MENU_SOCIAL_URL_EXPLAIN'	 		=> 'Sie k&ouml;nnen eine URL-Adresse einschlie&szlig;lich http:// Protokoll- oder Template Variable wie {U_PRIVATEMSGS} verwenden. Sie finden die verf&uuml;gbaren Template Variablen in der Datei includes/functions.php in Zeile 4545',
	'MENU_SOCIAL_DISPLAY'			    => 'Soziales Netzwerk anzeigen',
	'MENU_SOCIAL_ONLY_REGISTERED'   	=> 'Nur f&uuml;r registrierte Benutzer anzeigen',
	'MENU_SOCIAL_ONLY_GUEST'        	=> 'Nur f&uuml;r G&auml;ste anzeigen',
	'MENU_SOCIAL_NAV'         	    	=> 'Soziale Netzwerke',
	'DELETE_SOCIAL_CONFIRM'    			=> 'M&ouml;chten Sie dieses soziale Netzwerk wirklich l&ouml;schen?',
	'NO_SOCIALS'               			=> 'Es ist kein soziales Netzwerk zu verwalten',
	'SOCIAL_UPDATED'           			=> 'Soziales Netzwerk wurde erfolgreich aktualisiert',
	'SOCIAL_ADDED'             			=> 'Neues soziales Netzwerk wurde erfolgreich hinzugef&uuml;gt',

	'ENABLE_CUSTOM_CSS'					=> 'Benutzerdefiniertes CSS aktivieren',
	'ENABLE_CUSTOM_CSS_EXPLAIN'			=> 'W&auml;hlen Sie Ja, um die Verwendung der Datei custom.css zu aktivieren.',
	'SELECTED_FILE'						=> 'Ausgew&auml;hlte Datei',
	'SELECTED_FILE_EXPLAIN'				=> 'Bitte beachten Sie, dass das Absenden dieses Formulars Ihre custom.css-Datei auf unerwartete Weise ver&auml;ndern kann. Aufgrund von Verarbeitungsbeschr&auml;nkungen werden alle Schr&auml;gstriche entfernt und HTML-Sonderzeichen (als &amp; nbsp; und dergleichen) werden durch das urspr&uuml;ngliche Zeichen ersetzt. Wenn Sie eine erweiterte Bearbeitung ben&ouml;tigen, verwenden Sie bitte FTP, um die Datei direkt zu bearbeiten. Sie finden die Datei unter styles/BBOOTS/theme/custom.css.',
	'CSS_UPDATED'						=> 'CSS erfolgreich aktualisiert.',
));
