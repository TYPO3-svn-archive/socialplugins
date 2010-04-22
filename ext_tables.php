<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

/**
 * Registers a Plugin to be listed in the Backend. You also have to configure the Dispatcher in ext_localconf.php.
 */
Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,// The extension name (in UpperCamelCase) or the extension key (in lower_underscore)
	'LikeButton',				// A unique name of the plugin in UpperCamelCase
	'Facebook Social Plugin: Like Button'	// A title shown in the backend dropdown field
);


t3lib_extMgm::addStaticFile(
	$_EXTKEY,
	'Configuration/TypoScript',
	'Facebook Social Plugins'
);


$extensionName = t3lib_div::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_likebutton';

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'pages,layout,select_key,recursive';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_likebutton.xml');

?>