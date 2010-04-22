<?php
$extensionClassesPath = t3lib_extMgm::extPath('socialplugins') . 'Classes/';
return array(
	'tx_socialplugins_controller_likebuttoncontroller' => $extensionClassesPath . 'Controller/LikeButtonController.php',
	'tx_socialplugins_view_likebutton_indexhtml' => $extensionClassesPath . 'View/LikeButton/IndexHtml.php',
);
?>