<?php
/**
*
* BBlightbox
* @copyright (c) 2017 sitesplat.com All rights reserved
* @license Proprietary
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
// Titles
'ACP_BBLIGHTBOX'                              => 'BBlightBox',
'ACP_BBLIGHTBOX_TITLE'                        => 'BBlightBox',
'ACP_BBLIGHTBOX_EXPLAIN'                      => 'Willkommen auf Ihrer neuen Einstellungsseite für das Lightbox-Addon. Von hier aus können Sie die Einstellungen abhängig vom gewählten Plugin ändern. Insgesamt gibt es vier Plugins. Zwei davon sind Vanilla JavaScript fähig und zwei sind jQuery-abhängig. <br/>Wählen Sie diejenige, die Ihren Bedürfnissen am besten entspricht!',
'ACP_SETTINGS'                                => 'Einstellungen',

// General settings
'ACP_BBLIGHTBOX_GENERAL_OPTIONS'              => 'Allgemein Einstellungen',
'ACP_BBLIGHTBOX_ALLOW'                        => 'Erlaube BBlightBox',
'ACP_BBLIGHTBOX_BBCODE_ALLOW'                 => 'BBlightBox für [IMG] BBcodes',
'ACP_BBLIGHTBOX_BBCODE_EXPLAIN'               => 'Erlaube BBlightBox für Bilder, die über den Standard-IMG-BBcode gepostet wurden',
'BBLIGHTBOX_CAPTIONS'                         => 'Bildunterschriften',
'BBLIGHTBOX_CAPTIONS_EXPLAIN'                 => 'Erlaube, Bildunterschriften oder Kommentare',
'BBLIGHTBOX_SLIDE'                            => 'Diashow zwischen Bildern',
'BBLIGHTBOX_SLIDE_EXPLAIN'                    => 'Erstellen Sie nach Möglichkeit eine Diashow für den angehängten ([IMG] BBCode). <br /> Dies hängt vom ausgewählten Plugin ab und zeigt entweder Gruppen von Bildern, z. B. XX-Beiträge, oder die gesamten Bilder, die im XX-Thema enthalten sind, als Diashow an.',
'QUOTED_IMAGES'                               => 'Ändern Sie die Größe der Bilder des zitierten IMG-BBcodes',
'QUOTED_IMAGES_EXPLAIN'                       => 'Ermöglicht das Ändern der Größe von Bildern in Anführungszeichen (zwischen Anführungszeichen), die über den IMG-BBcode veröffentlicht wurden',
'RESIZED_IMAGES'                              => 'Ändern Sie die Größe der IMG-BBcode-Bilder',
'RESIZED_IMAGES_EXPLAIN'                      => 'Ändern Sie die Größe für IMG-BBcode-Bilder auf xx Pixel. 0 zum Ausschalten',
'ACP_BBLIGHTBOX_LAYOUT_PREVIEW'               => 'Anhänge layout',
'COLUMN_LAYOUT'                               => 'Anhänge layout',
'COLUMN_LAYOUT_EXPLAIN'                       => 'Wählen Sie ein vordefiniertes Layout für Anhänge, um ein modernes und optisch ansprechendes Format zu erstellen. [IMG] BBcodes und Inline-Anhänge sind von dieser Option absichtlich nicht betroffen. <Small style="margin-top:-4px; margin-bottom:14px; display: block;"><br /> <strong>Standardlayout:</strong> Standarddesign. Bilder werden "wie sie sind" angezeigt. Sie können die gesamte Breite des Beitrag einnehmen.<br /> <strong>Spalte:</strong> Die Bilder sind ordentlich in eine vollständige Spalte unterteilt und haben dieselbe Größe.<br /> <strong>Gruppiert (mittel):</strong> Bilder werden in mittlerer Größe und mit einer gemauerten Positionierung gruppiert.<br /> <strong>Gruppiert (klein):</strong> Bilder werden genauso wie das gruppierte Medium positioniert, außer nur in geringerer Größe.</small >',
'1COLLUMS'                                    => 'Standard layout',
'2COLLUMS'                                    => 'Spalte',
'3COLLUMS'                                    => 'gruppiert (mittel)',
'4COLLUMS'                                    => 'gruppiert (klein)',

// Plugins
'ACP_BBLIGHTBOX_PLUGINS'                      => 'Plugins',
'ACP_BBLIGHTBOX_PLUGIN'                       => 'Haupt-LightBox-Plugin',
'ACP_BBLIGHTBOX_PLUGIN_EXPLAIN'               => 'Wählen Sie, welches Plugin Sie als Haupt-Lightbox verwenden möchten. Weitere Details zu den Plugins finden Sie hier: <br /> <a href="https://github.com/feimosi/baguetteBox.js" target="blank" title=""> BaguetteBox (Vanilla JS)</a> <br /> <a href="http://fancyapps.com/fancybox/3/" target="blank" title=""> Fancybox (jQuery)</a><br /> <a href="https://github.com/nicolas-t/Chocolat/" target="blank" title =""> Chocolat (jQuery)</a><br /> <a href="http://jslightbox.felixhagspiel.de/" target="blank" title ="">jsOnlyLightbox (Vanilla JS)</a><br /> <a href="https://sachinchoolur.github.io/lightgallery.js/" target="blank" title="">lightgallery.js (Vanilla JS)</a>',

// baguetteBox
'BAGUETTEBOX_ANIMATION'                       => 'Animation',
'SLIDEIN'                                     => 'Reinschieben',
'FADEIN'                                      => 'einblenden',
'ZOOM'                                        => 'Zoom',
'ZOOM_IN_OUT'                                 => 'Rein/rauszoomen',
'NONE'                                        => 'keiner',

// fancybox
'FANCYBOX_PROTECT'                            => 'Schützen Sie Bilder vor dem Download',
'FANCYBOX_PROTECT_EXLPLAIN'                   => 'Verhindern Sie nach Möglichkeit das Herunterladen der angehängten Bilder',
'FANCYBOX_ANIMATIONEFFECT'                    => 'Animationseffekt',
'FANCYBOX_ANIMATIONEFFECT_EXPLAIN'            => 'Ermöglichen Sie einen Animationseffekt, wenn dieser unterstützt wird',

// Chocolat
'CHOCOLAT_ENABLEZOOM'                         => 'Aktivieren Sie die Zoomfunktion',
'CHOCOLAT_ENABLEZOOM_EXPLAIN'                 => 'Wenn möglich, Zoomen von Bildern zulassen. Support touchscreen.',

// misc stuff ext detail etc
'BBLIGHTBOX_DESCRIPTION'                      => 'Ein modernes und leistungsstarkes LightBox-System für Ihre Forumsbeitragsbilder',
'BBLIGHTBOX_DEVELOPERS'                       => 'Entwickler',
'BBLIGHTBOX_TASKS_1'                          => 'Touchscreen-Support, Tastaturnavigation, Reaktionsschnelligkeit und mehr',
'BBLIGHTBOX_TASKS_2'                          => 'Diashow',
'BBLIGHTBOX_TASKS_3'                          => 'Große LightBox support',
'BBLIGHTBOX_TASKS_4'                          => 'Gemeinsame Seiten wie UCP, MCP, Posting, Viewtopic usw. Sie ist bereit',
'BBLIGHTBOX_TASKS_5'                          => 'Schau nach Premium-Erweiterungen auf <a href="https://sitesplat.com/phpBB3/marketplace.php">sitesplat.com/marketplace.php</a>',
'BBLIGHTBOX_TASKS_6'                          => 'Vieles mehr..!',

'SITESPLAT_COM'                               => 'https://sitesplat.com',
'SITESPLAT_COPY'                              => '&#169; SiteSplat',
'LICENSE_INFO'                                => 'Proprietary - SiteSplat All rights reserved',
'EXTENSION_DEVELOPER'                         => 'Entwickler',
'ACP_BBLIGHTBOX_NOTICE_CLOSE'                 => 'Schließen',

'ACP_BBLIGHTBOX_VERSION'                      => '1.0.3',
'ACP_LOADING'                                 => 'Warten Sie mal. Wird geladen...',

// Error/success messages
'ACP_BBLIGHTBOX_SETTING_SAVED'                => 'BBlightBox-Einstellungen gespeichert',
'SS_HELPER_NOTY'                              => 'SiteSplat BBcore existiert nicht!<br />Laden Sie das <a href="https://sitesplat.com" target="_blank">BBcore</a> herunter und kopieren Sie den BBcore-Ordner in Ihren SiteSplat-Erweiterungsordner.',
'BBLIGHTBOX_NOTICE'                           => '<div class="phpinfo"><p>Die Einstellungen für diese Erweiterung befinden sich in <strong>%1$s &#187; %2$s &#187; %3$s</strong>.</p></div>',
'ACP_BBLIGHTBOX_INLINE_REMOVED'               => 'Alle Inline-Anhänge wurden in das Standard-Anhangsfeld unter dem Beitrag verschoben.',
'ACP_BBLIGHTBOX_THUMBNAILS_REMOVED'           => 'Alle Miniaturbilder wurden entfernt. Alle Bilder werden jetzt in voller Größe angezeigt.',
'ACP_BBLIGHTBOX_THUMBS_REASSIGNED'            => 'Alle Miniaturbilder wurden neu zugewiesen. Alle Bilder, die den Miniaturbildeinstellungen in den Anhangseinstellungen entsprechen, werden jetzt im Miniaturbildmodus angezeigt.',

'BBLIGHTBOX_OPTIONS'                          => 'Optionen für das Synchronisieren von Anhängen',
'REMOVE_INLINE_ATTACHMENTS'                   => 'Inline-Anhänge entfernen',
'REMOVE_INLINE_ATTACHMENTS_EXPLAIN'           => 'Entfernen Sie alle Inline-Anhänge in allen Themen. Dies entfernt KEINE Anhänge, sondern verschiebt sie einfach zurück in die Standard-Anhangbox unter dem Beitrag.',
'BBLIGHTBOX_PROGRESS'                         => 'Fortschritt: %d von %d.',
'REMOVE_THUMBNAILS'                           => 'Miniaturbilder entfernen',
'REMOVE_THUMBNAILS_EXPLAIN'                   => 'Entfernen Sie alle Miniaturbilder, damit vorhandene Bilder keine Miniaturbilder mehr sind.',
'REASSIGN_THUMBNAILS'                         => 'Neu zuweisen Miniaturbilder',
'REASSIGN_THUMBNAILS_EXPLAIN'                 => 'Alle Miniaturbilder Neu zuweisen.',
));

// Description of Upload extension
$lang = array_merge($lang, array(
'DESCRIPTION_PAGE'                            => 'Beschreibung',
'DESCRIPTION_NOTICE'                          => 'Extension Hinweis',
'ext_details' => array(
'details' => array(
'DESCRIPTION_1'                               => 'Bis zu 4 lightboxes',
'DESCRIPTION_2'                               => 'Slideshow',
'DESCRIPTION_3'                               => 'Bildunterschriften',
),
'note'  => array(
'NOTICE_1'                                    => 'Alle gängigen Seiten wie UCP, MCP, Posting, Viewtopic etc  sie ist bereit',
'NOTICE_2'                                    => 'phpBB 3.2 bereit.',
)
)
));
