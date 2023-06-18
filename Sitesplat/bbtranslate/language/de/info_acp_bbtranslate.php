<?php
/**
 *
 * @package BBtranslate
 * @copyright (c) 2016 SiteSplat All rights reserved
 * @license Proprietary
 *
 */

if (!defined('IN_PHPBB')) {
	exit;
}

if (empty($lang) || !is_array($lang)) {
	$lang = array();
}

$lang = array_merge($lang, array(
'BBTRANSLATE'                              => 'BBtranslate Einstellungen',
'BBTRANSLATE_EXPLAIN'                      => 'Geben Sie Ihren Schlüssel1 oder Schlüssel2 aus Ihrem Azure Translator-Textabonnement ein. <br/> <strong>SCHRITT 1:</strong> Melden Sie sich hier für ein Microsoft Azure-Konto an: <a href="https://azure.microsoft.com/en-us/account/" target="blank">Microsoft Azure Portal</a><br /><strong>SCHRITT 2:</strong> Registrieren Sie jetzt eine neues Abonnement (kostenlos oder kostenpflichtig) und f&uuml;gen Übersetzungstext-Dienst unter Cognitive Services hinzu. Befolgen Sie dazu die hier aufgeführten 4 Schritte: <a href = "https : //www.microsoft.com/en-us/translator/getstarted.aspx "target =" blank "> Erste Schritte mit der Translator-API </a>, damit Ihr Key1 oder Key2 mit BBtranslate verwendet werden kann. Ohne den Key wird das Programm nicht funktionieren',

// Older entries from the azure data market version
'BBTRANSLATE_CLIENT_ID'                    => 'Client ID',
'BBTRANSLATE_SECRET_KEY'                   => 'Client Secret',

'BBTRANSLATE_NOTICE'                       => '<div class="phpinfo"><p>Die Einstellungen für diese Erweiterungen befinden sich in <strong>%1$s » %2$s » %3$s » %4$s</strong>.</p></div>',
'FH_HELPER_NOTICE'                         => 'SiteSplat BBcore existiert nicht! <br /> Laden Sie das <a href="http://sitesplat.com" target="_blank"> BBcore </a> herunter und kopieren Sie den BBcore-Ordner in Ihren SiteSplat-Erweiterungsordner.',
)
);

// Description of Upload extension
$lang = array_merge($lang, array(
'DESCRIPTION_PAGE'                         => 'Beschreibung',
'DESCRIPTION_NOTICE'                       => 'Extension Hinweis',
'ext_details'  => array(
'details' => array(
'DESCRIPTION_1'                            => 'Einstellung',
'DESCRIPTION_2'                            => 'Allgemein Einstellung',
'DESCRIPTION_3'                            => 'Beitrag & Themen Einstellung',
'DESCRIPTION_4'                            => 'Standardeinstellung alle Benutzer',
),
'note' => array(
'NOTICE_1'                                 => '3.2 bereit.',
)
)
)
);