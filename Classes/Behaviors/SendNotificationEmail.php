<?php
namespace CIC\Cicregister\Behaviors;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Zach Davis <zach@castironcoding.com>, Cast Iron Coding
 *  Lucas Thurston <lucas@castironcoding.com>, Cast Iron Coding
 *  Gabe Blair <gabe@castironcoding.com>, Cast Iron Coding
 *  Peter Soots <peter@castironcoding.com>, Cast Iron Coding
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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

class SendNotificationEmail extends AbstractBehavior implements BehaviorInterface {

	public function execute(\CIC\Cicregister\Domain\Model\FrontendUser $frontendUser, array $conf) {
		$settings = $this->configurationManager->getConfiguration(\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_SETTINGS);
		$sender[$conf['senderEmail']] = $conf['senderName'];
		$receiver[$conf['receiverEmail']] = $conf['receiverName'];
		$variables = $conf['variables'];
		//$variables['frontendUser'] = \TYPO3\CMS\Extbase\Utility\ArrayUtility::convertObjectToArray($frontendUser);
		$variables['frontendUser'] = $frontendUser;
		$variables['settings'] = $settings;
		$this->sendTemplateEmail($receiver, $sender, $conf['subject'], $conf['template'], $variables);
	}
}

?>
