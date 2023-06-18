<?php
/**
 *
* @package BBprefix
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
 *
 */

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, [
'ACP_BBPREFIX_MANAGEMENT'                => 'BBpr&auml;fix Management',
'ACP_BBPREFIX_MANAGE'                    => 'Verwaltung BBpr&auml;fix',

'ACP_BBPREFIX_MANAGE_EXPLAIN'            => 'Auf dieser Seite k&ouml;nnen Sie die Themenpr&auml;fixe f&uuml;r Ihr Board verwalten. Die Verwendung von Variablen in Ihrem Pr&auml;fix ist m&ouml;glich. Benutzerdefinierte BBcodes werden ebenfalls unterst&uuml;tzt, sodass Sie lustige und flexible Pr&auml;fixe erstellen k&ouml;nnen. <br/> Sie k&ouml;nnen auch Foren und Gruppen von der Verwendung von Pr&auml;fixen ausschließen. Habe Spa&szlig;!!!',
'BBPREFIX_MANAGE_EXONE'                  => '<h3>Das Symbol f&uuml;r Font Awesome k&ouml;nnte sein: </h3> <br/> <br/> <strong> BBCode-Verwendung: </strong> <code> [fa-bug] [/fa-bug] </code> <br/> <strong> HTML-Ersetzung </strong> <code> &lt;i class=&quot;fa fa-bug&quot;&gt;&lt;/i&gt; </code> <br/> <strong> Pr&auml;fixverwendung: </strong> <code> [fa-bug] [/fa-bug] </code>',
'BBPREFIX_MANAGE_EXTWO'                  => '<h3>Bootstrap-Labels k&ouml;nnen sein: </h3> <br/> <br/> <strong> BBCode-Verwendung: </strong> <code> [label-warning] [/label-warning] </code> <br/> <strong> HTML-Ersetzung </strong> <code> &lt;span class=&quot;label label-warning&gt;MyTextHere&lt;/span&gt;</code> <br/> <strong> Pr&auml;fixverwendung: </strong> <code> [label-warning] [/label-warning] </code>',
'BBPREFIX_MANAGE_EXTHREE'                => '<h3>Bildbasierter BBCode k&ouml;nnte sein: </h3> <br/> <br/> <strong> BBCode-Verwendung: </strong> <code> [img-owl] [/img-owl] </code> <br/> <strong> HTML-Ersetzung </strong> <code> &lt;img class ="bbprefix-index-tag" src=&quot;https://cdn2.iconfinder.com/data/icons/thesquid-ink-40-Free-Flat-Icon-Pack/64/Eule-20.png&quot; alt=""&gt; </code> <br/> <strong> Pr&auml;fixverwendung: </strong> <code> [img-owl] [/img-owl] </code> <br/> ** <small > Beachten Sie das class = "bbprefix-index-tag" f&uuml;r Bilder, erforderlich ist, um sicherzustellen, dass die richtige maximale Gr&ouml;&szlig;e auf der Indexseite angewendet wird. </Small>',


'TITLE_EXPLAIN_TIPS'                     => 'Tipps und Verwendung:',
'TITLE_EXPLAIN_TIPS_EXPLAIN'             => 'Die derzeit zul&auml;ssigen Variablen sind: (<strong>{DATE}</strong>, <strong>{POSTER}</strong> und <strong>{USERNAME}</strong>) <br/> Benutzerdefinierte erstellte BBcodes m&uuml;ssen <strong>erst</strong> verwendet werden und dann kann der BBcode in BBpr&auml;fix wie folgt verwendet werden:',
'TITLE_EXPLAIN_TIPS_STAR'                => '<small> ** Erstellen Sie Ihren benutzerdefinierten BBcode ZUERST unter ACP> Beitr&auml;ge> Messages> BBcodes und erstellen Sie dann Ihren BBpr&auml;fix-Eintrag. </small>',

'BBPREFIX_NOTICE'                        => '<div class = "phpinfo"> <p> Die Einstellungen f&uuml;r diese Erweiterung befinden sich in <strong>%1$s &#187; %2$s &#187; %3$s</strong>. </p> </div>',
'SS_HELPER_NOTY'                         => 'SiteSplat BBcore existiert nicht! <br/> Laden Sie das <a href="http://sitesplat.com" target="_blank"> BBcore </a> herunter und kopieren Sie den BBcore-Ordner in Ihren SiteSplat-Erweiterungsordner.',

'ACP_BBPREFIX'                           => 'Themenpräfixe',
'PREFIX_NAME'                            => 'Pr&auml;fix Name',
'PREFIX_PARSED'                          => 'Pr&auml;fix',
'EX_FORUMS'                              => 'Ausgeschlossene Foren',
'USED'                                   => 'Benutzt',
'ADD_PREFIX'                             => 'Neuer Pr&auml;fix',

'BBPREFIX_TITLE'                         => 'Pr&auml;fix',
'BBPREFIX_TITLE_EXPLAIN'                 => 'Dies wird tats&auml;chlich vor dem Titel des Themas angezeigt. BBCode wird unterst&uuml;tzt. <br/> Es k&ouml;nnen bestimmte Variablen verwendet werden, die durch tats&auml;chliche Daten ersetzt werden, wenn das Pr&auml;fix angewendet wird. <br/> Siehe <strong> Pr&auml;fixverwendung </strong> unten unter <strong> Tipps und Verwendung </strong> zur Verwendung des aus dem BBcode erstellten Pr&auml;fixes',
'BBPREFIX_NAME'                          => 'Pr&auml;fix Name',
'BBPREFIX_NAME_EXPLAIN'                  => 'Dies ist eine eindeutige Kennung, mit deren Hilfe Sie zwischen Pr&auml;fixen unterscheiden k&ouml;nnen.',
'BBPREFIX_ON_INDEX'                      => 'Pr&auml;fix auf Themenliste',
'BBPREFIX_ON_INDEX_EXPLAIN'              => 'Pr&auml;fixe auf Index- und Viewforum Seiten anzeigen. Wenn ein Pr&auml;fix nicht angezeigt werden darf, wird auf diesen Seiten kein Pr&auml;fix angezeigt, in dem die Thementitel angezeigt werden. <br/> Dies ist besonders n&uuml;tzlich, wenn viele Pr&auml;fixe verwendet werden und daher die Themenliste un&uuml;bersichtlich werden kann. <br/><br/>',
'BBPREFIX_FORUMS'                        => 'Foren ausschlie&szlig;en',
'BBPREFIX_FORUMS_EXPLAIN'                => 'Geben Sie an, welche Foren f&uuml;r die Verwendung dieses Pr&auml;fixes ausgeschlossen sind.',
'BBPREFIX_GROUPS'                        => 'Gruppenberechtigung',
'BBPREFIX_GROUPS_EXPLAIN'                => 'Geben Sie an, welche Gruppen dieses Pr&auml;fix anwenden k&ouml;nnen.',

'DELETE_PREFIX'                          => 'M&ouml;chten Sie das angegebene Pr&auml;fix wirklich l&ouml;schen?',
'DELETE_PREFIX_CONFIRM'                  => 'Das Pr&auml;fix und alle seine Instanzen werden gel&ouml;scht. Das kann nicht r&uuml;ckgängig gemacht werden.',

'BBPREFIX_EMPTY_ERROR'                   => 'Leerer Name und/oder Pr&auml;fix',
'BBPREFIX_NAME_ERROR'                    => 'Diese Pr&auml;fix ID ist bereits vergeben',
'BBPREFIX_TITLE_ERROR'                   => 'Dieses Pr&auml;fix existiert bereits',

'PREFIX_ADDED_SUCCESS'                   => 'Das Pr&auml;fix wurde erfolgreich hinzugef&uuml;gt.',
'PREFIX_EDITED_SUCCESS'                  => 'Das Pr&auml;fix wurde erfolgreich aktualisiert.',
'PREFIX_DELETED_SUCCESS'                 => 'Das Pr&auml;fix wurde erfolgreich gel&ouml;scht.',
'NO_PREFIX_ID_SPECIFIED'                 => 'Sie m&uuml;ssen eine g&uuml;ltige Pr&auml;fix-ID angeben.',

'BBPREFIX_DESCRIPTION'                   => 'F&uuml;ge den Forenthemen m&auml;chtige und stylische Pr&auml;xies hinzu',
'BBPREFIX_DEVELOPERS'                    => 'Entwickler',
'BBPREFIX_TASKS_1'                       => 'Intelligente Optionen',
'BBPREFIX_TASKS_2'                       => 'BBcode aktiviert',
'BBPREFIX_TASKS_3'                       => 'Benutze Bilder, Texte und Beschriftungen, die Sie in einen BBcode einf&uuml;gen k&ouml;nnen',
'BBPREFIX_TASKS_4'                       => 'Ausschluss aus dem Forum',
'BBPREFIX_TASKS_5'                       => 'Gruppenausschluss',
'BBPREFIX_TASKS_6'                       => 'Viel mehr..!',

'SITESPLAT_COM'                          => 'http://sitesplat.com',
'SITESPLAT_COPY'                         => '&#169; SiteSplat',
'LICENSE_INFO'                           => 'Proprietary - SiteSplat All rights reserved',
'EXTENSION_DEVELOPER'                    => 'Entwickler',
'ACP_BBPREFIX_NOTICE_CLOSE'              => 'Close',

'ACP_BBPREFIX_VERSION'                   => '1.0.8',
'ACP_BBPREFIX'                           => 'BBprefix',
'ACP_LOADING'                            => 'Hold On. Loading...'
]);

// Description misc
$lang = array_merge($lang, array(
'DESCRIPTION_PAGE'                       => 'Description',
'DESCRIPTION_NOTICE'                     => 'Extension note',
'ext_details' => array(
'details' => array(
'DESCRIPTION_1'                          => 'Multiple prefixes',
'DESCRIPTION_2'                          => 'Limited per group and or per forum',
'DESCRIPTION_3'                          => 'Use of variables',
'DESCRIPTION_4'                          => 'Stats',
),
'note' => array(
'NOTICE_1'                               => 'php version > 5.4',
'NOTICE_2'                               => 'phpBB 3.2 ready'
)
)
));