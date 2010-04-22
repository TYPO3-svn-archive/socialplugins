<?php

########################################################################
# Extension Manager/Repository config file for ext "socialplugins".
#
# Auto generated 22-04-2010 12:28
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Facebook Social Plugins',
	'description' => 'A set of plugin content elements to insert Facebook Social Plugins on TYPO3 pages.',
	'category' => 'fe',
	'author' => 'Ingo Renner',
	'author_company' => '',
	'author_email' => 'ingo@typo3.org',
	'shy' => '',
	'dependencies' => 'extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'version' => '0.1.3',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.3.0-4.3.99',
			'extbase' => '1.0.0-0.0.0',
			'fluid' => '1.0.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:11:{s:9:"ChangeLog";s:4:"825c";s:16:"ext_autoload.php";s:4:"f5bb";s:12:"ext_icon.gif";s:4:"6885";s:17:"ext_localconf.php";s:4:"816f";s:14:"ext_tables.php";s:4:"5b7a";s:43:"Classes/Controller/LikeButtonController.php";s:4:"0276";s:37:"Classes/View/LikeButton/IndexHtml.php";s:4:"dc2f";s:47:"Configuration/FlexForms/flexform_likebutton.xml";s:4:"bb1d";s:38:"Configuration/TypoScript/constants.txt";s:4:"d41d";s:34:"Configuration/TypoScript/setup.txt";s:4:"cc06";s:14:"doc/manual.sxw";s:4:"e7ef";}',
	'suggests' => array(
	),
);

?>