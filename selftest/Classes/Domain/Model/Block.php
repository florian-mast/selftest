<?php
namespace TYPO3\Selftest\Domain\Model;

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
class Block extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

    /**
     * Label the title of the text
     *
     * @var \string
     */
    protected $title;
    
	/**
	 * Label for the block
	 *
	 * @var \string
	 */
	protected $label;

	/**
	 * all answer statements
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Selftest\Domain\Model\Answer>
	 */
	protected $answers;

	/**
	 * for selection available options (will be applied for each answerstatement)
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Selftest\Domain\Model\Option>
	 */
	protected $options;

    /**
     * checkbox for the labelrow
     *
     * @var \boolean
     */
    protected $showLabelrow;

	/**
	 * __construct
	 *
	 * @return Selftest
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->answers = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->options = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->resultOptions = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the label
	 *
	 * @return \string $label
	 */
	public function getLabel() {
		return $this->label;
	}

	/**
	 * Sets the label
	 *
	 * @param \string $label
	 * @return void
	 */
	public function setLabel($label) {
		$this->label = $label;
	}
    
    /**
     * Returns the showLabelrow
     *
     * @return \boolean $$showLabelrow
     */
    public function getShowLabelrow() {
        return $this->showLabelrow;
    }

    /**
     * Sets showLabelrow
     *
     * @param \boolean $showLabelrow
     * @return void
     */
    public function setShowLabelrow($showLabelrow) {
        $this->showLabelrow = $showLabelrow;
    } 
    
    /**
     * Returns the title
     *
     * @return \string $title
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param \string $title
     * @return void
     */
    public function setTitle($title) {
        $this->title = $title;
    }
    

	/**
	 * Adds a Answer
	 *
	 * @param \TYPO3\Selftest\Domain\Model\Answer $answer
	 * @return void
	 */
	public function addAnswer(\TYPO3\Selftest\Domain\Model\Answer $answer) {
		$this->answers->attach($answer);
	}

	/**
	 * Removes a Answer
	 *
	 * @param \TYPO3\Selftest\Domain\Model\Answer $answerToRemove The Answer to be removed
	 * @return void
	 */
	public function removeAnswer(\TYPO3\Selftest\Domain\Model\Answer $answerToRemove) {
		$this->answers->detach($answerToRemove);
	}

	/**
	 * Returns the answers
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Selftest\Domain\Model\Answer> $answers
	 */
	public function getAnswers() {
		return $this->answers;
	}

	/**
	 * Sets the answers
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Selftest\Domain\Model\Answer> $answers
	 * @return void
	 */
	public function setAnswers(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $answers) {
		$this->answers = $answers;
	}

	/**
	 * Adds a Option
	 *
	 * @param \TYPO3\Selftest\Domain\Model\Option $option
	 * @return void
	 */
	public function addOption(\TYPO3\Selftest\Domain\Model\Option $option) {
		$this->options->attach($option);
	}

	/**
	 * Removes a Option
	 *
	 * @param \TYPO3\Selftest\Domain\Model\Option $optionToRemove The Option to be removed
	 * @return void
	 */
	public function removeOption(\TYPO3\Selftest\Domain\Model\Option $optionToRemove) {
		$this->options->detach($optionToRemove);
	}

	/**
	 * Returns the options
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Selftest\Domain\Model\Option> $options
	 */
	public function getOptions() {
		return $this->options;
	}

	/**
	 * Sets the options
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Selftest\Domain\Model\Option> $options
	 * @return void
	 */
	public function setOptions(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $options) {
		$this->options = $options;
	}



}
?>