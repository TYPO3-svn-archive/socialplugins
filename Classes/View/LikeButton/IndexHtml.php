<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Ingo Renner <ingo@typo3.org>
*  All rights reserved
*
*  This class is a backport of the corresponding class of FLOW3.
*  All credits go to the v5 team.
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * A view that puts together the iframe code for the Facebook Like Button
 * Social Plugin.
 *
 * @package Socialplugins
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Tx_Socialplugins_View_LikeButton_IndexHtml extends Tx_Extbase_MVC_View_AbstractView {

	/**
	 * Settings for the view
	 *
	 * @var	array
	 */
	protected $settings;

	/**
	 * The Social Plugin URL
	 *
	 * @var	string
	 */
	protected $socialPluginUrl = 'http://www.facebook.com/plugins/like.php';

	/**
	 * Renders Facebook Like Button Social Plugin
	 *
	 * @return string The iframe HTML code for the Facebook Like Button
	 */
	public function render() {
		$fontParameter = '';
		if (!empty($this->settings['font'])) {
			$fontParameter = '&amp;font=' . urlencode($this->settings['font']);
		}

		$parameters = 'href=' . urlencode(t3lib_div::getIndpEnv('TYPO3_REQUEST_URL'))
			. '&amp;layout=' . $this->settings['layout']
			. '&amp;show-faces=' . ($this->settings['showFaces'] ? 'true' : 'false')
			. '&amp;width=' . intval($this->settings['width'])
			. '&amp;action=' . $this->settings['action']
			. $fontParameter
			. '&amp;colorscheme=' . $this->settings['colorscheme'];

		$likeButton = '<iframe '
			. 'src="'. $this->socialPluginUrl . '?' . $parameters . '" '
			. 'scrolling="no" frameborder="0"  allowTransparency="true" '
			. 'style="border:none; overflow:hidden; width:'
			. intval($this->settings['width']) . 'px; height:px"'
			. '></iframe>';

		return $likeButton;
	}

	/**
	 * Allows to inject settings for this view.
	 *
	 * @param	array	An array of settings, expects a key 'LikeButton' to be present.
	 */
	public function injectSettings(array $settings) {
		$this->settings = $settings['LikeButton'];
	}
}
?>