<?php
namespace TYPO3\Selftest\Controller;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Florian Mast <flo.mast@web.de>
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

/**
 *
 *
 * @package selftest
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class SelftestController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * selftestRepository
	 *
	 * @var \TYPO3\Selftest\Domain\Repository\SelftestRepository
	 * @inject
	 */
	protected $selftestRepository;

    /**
     * action initialize
     *
     * @return void
     */
    public function initializeAction() {    
        $GLOBALS['TSFE']->additionalFooterData['load_jquery'] = '<script type="text/javascript" src="'. \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::siteRelPath('selftest') .'Resources/Public/JavaScript/jquery-1.11.0.min.js"></script>'; 
        $GLOBALS['TSFE']->additionalFooterData['tx_selftest_eval'] = '<script type="text/javascript" src="'. \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::siteRelPath('selftest')
         .'Resources/Public/JavaScript/evalSelftest.js"></script>';  
         
    }


	/**
	 * action show
	 *
	 * @return void
	 */
	public function showAction() {
	  
        $selftestUid = $this->settings['quantity'];
        $selftest = $this->selftestRepository->findByUid($selftestUid);
       
		$this->view->assign('selftest', $selftest);
	}

}
?>