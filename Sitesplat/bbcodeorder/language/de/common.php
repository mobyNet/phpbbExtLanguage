<?php
/**
*
* BBcodeOrder+
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
'BBCODEORDER_EXPLAIN'		=> '<hr><h3>Verwendung und Tipps:</h3><br /><strong>Standard-BBCode:</strong> Standard-BBCodes verfügen über neue Optionen, z. B. die Möglichkeit, sortiert oder ausgeblendet zu werden. Leider können sie hier nicht direkt bearbeitet werden, wie die benutzerdefinierten BBCodes <br /><strong>Benutzerdefinierte BBcodes:</strong> Benutzerdefinierte BBcodes können auch sortiert werden, haben ein benutzerdefiniertes Symbol, legen Gruppenberechtigungen fest usw. <br /><strong>Allgemeine Verwendung:</strong> Sie können "Teiler" hinzufügen, die im Grunde genommen Schaltflächengruppen unterteilen. Sie sind mit "-" gekennzeichnet und können beliebig oft hinzugefügt und verschoben/sortiert werden. (Sie können auch Drag & Drop verwenden.) <br />Sie können verschiedene Schaltflächengruppen oder einzelne Schaltflächen erstellen. <br /> Es gibt auch einen speziellen Teiler mit der Bezeichnung "--", der den Anfang der Auswahlbox im Frontend kennzeichnet. <br /> Jeder unter diesem speziellen Teiler bestellte BBCode wird in der Auswahlbox angezeigt, ja sogar die Standard-BBCodes :-). Farbe und Schriftart sind die Ausnahmen, da Sie keine Auswahlbox in eine Auswahlbox einfügen können. <br /> Flash und Schriftgröße sind in der Regel nur eine Unordnung. Idealerweise sollten sie ausgeblendet werden, um mehr Platz für andere Elemente zu haben. <br /> <a href = "http://sitesplat.com/phpBB3/ marketplace.php? mode = view & item_id = 11 "target =" blank "title =" "> Smart Snappy Reply </a> wird ebenfalls nativ unterstützt.',
'NEW_DIVIDER'				=> 'Fügen Sie einen neuen Teiler hinzu',
'HIDE'					=> 'Ausblenden',
'SHOW'					=> 'Anzeigen',
'BBCODE_HIDDEN'			=> 'Der BBCode wurde ausgeblendet.',
'BBCODES_ORDERED'			=> 'Die BBCode Reihenfolge wurde aktualisiert.',
'BBCODES_DIVIDERS_PROBLEM'	=> 'Sie können den Teiler nach dem Start der Auswahlbox nicht mehr positionieren.',
'BBCODE_ICON'				=> 'Icon',
'BBCODE_ICON_EXPLAIN'		=> '<a href="http://fontawesome.io/icons/">Font Awesome icon</a> ohne fa- prefix.',
'BBCODE_GROUP'				=> 'Verwalten Sie Gruppen, die diesen BBCode verwenden können',
'BBCODE_GROUP_EXPLAIN'		=> 'Wenn keine Gruppen ausgewählt sind, können alle Benutzer diesen BBCode verwenden. Verwenden Sie STRG + KLICK (oder CMD + KLICK auf dem Mac), um mehr als eine Gruppe auszuwählen oder die Auswahl aufzuheben.',
'BBCODEORDER_IMGUR_UPLOAD'	=> 'Klicken Sie hier, um zu IMGUR hochzuladen',

'BBCODE_B'				=> 'Fett',
'BBCODE_I'				=> 'Kursiv',
'BBCODE_U'				=> 'Unterstrichen',
'BBCODE_L'				=> 'Aufzählung',
'BBCODE_O'				=> 'Geordnete Aufzählung',
'BBCODE_LISTITEM'			=> 'Listeneintrag',
'BBCODE_C'				=> 'Code',
'BBCODE_Q'				=> 'Zitat',
'BBCODE_IMG'				=> 'Bild',
'BBCODE_URL'				=> 'URL',
'BBCODE_FLASH'				=> 'FLASH',
)
);