<?php

namespace TYPO3\Selftest\Tests;
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
 * Test case for class \TYPO3\Selftest\Domain\Model\Selftest.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Self Test
 *
 * @author Florian Mast <flo.mast@web.de>
 */
class SelftestTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\Selftest\Domain\Model\Selftest
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\Selftest\Domain\Model\Selftest();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getSourceReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setSourceForStringSetsSource() { 
		$this->fixture->setSource('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getSource()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnswersReturnsInitialValueForAnswer() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getAnswers()
		);
	}

	/**
	 * @test
	 */
	public function setAnswersForObjectStorageContainingAnswerSetsAnswers() { 
		$answer = new \TYPO3\Selftest\Domain\Model\Answer();
		$objectStorageHoldingExactlyOneAnswers = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneAnswers->attach($answer);
		$this->fixture->setAnswers($objectStorageHoldingExactlyOneAnswers);

		$this->assertSame(
			$objectStorageHoldingExactlyOneAnswers,
			$this->fixture->getAnswers()
		);
	}
	
	/**
	 * @test
	 */
	public function addAnswerToObjectStorageHoldingAnswers() {
		$answer = new \TYPO3\Selftest\Domain\Model\Answer();
		$objectStorageHoldingExactlyOneAnswer = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneAnswer->attach($answer);
		$this->fixture->addAnswer($answer);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneAnswer,
			$this->fixture->getAnswers()
		);
	}

	/**
	 * @test
	 */
	public function removeAnswerFromObjectStorageHoldingAnswers() {
		$answer = new \TYPO3\Selftest\Domain\Model\Answer();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($answer);
		$localObjectStorage->detach($answer);
		$this->fixture->addAnswer($answer);
		$this->fixture->removeAnswer($answer);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getAnswers()
		);
	}
	
	/**
	 * @test
	 */
	public function getOptionsReturnsInitialValueForOption() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getOptions()
		);
	}

	/**
	 * @test
	 */
	public function setOptionsForObjectStorageContainingOptionSetsOptions() { 
		$option = new \TYPO3\Selftest\Domain\Model\Option();
		$objectStorageHoldingExactlyOneOptions = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneOptions->attach($option);
		$this->fixture->setOptions($objectStorageHoldingExactlyOneOptions);

		$this->assertSame(
			$objectStorageHoldingExactlyOneOptions,
			$this->fixture->getOptions()
		);
	}
	
	/**
	 * @test
	 */
	public function addOptionToObjectStorageHoldingOptions() {
		$option = new \TYPO3\Selftest\Domain\Model\Option();
		$objectStorageHoldingExactlyOneOption = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneOption->attach($option);
		$this->fixture->addOption($option);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneOption,
			$this->fixture->getOptions()
		);
	}

	/**
	 * @test
	 */
	public function removeOptionFromObjectStorageHoldingOptions() {
		$option = new \TYPO3\Selftest\Domain\Model\Option();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($option);
		$localObjectStorage->detach($option);
		$this->fixture->addOption($option);
		$this->fixture->removeOption($option);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getOptions()
		);
	}
	
	/**
	 * @test
	 */
	public function getResultOptionsReturnsInitialValueForResult() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getResultOptions()
		);
	}

	/**
	 * @test
	 */
	public function setResultOptionsForObjectStorageContainingResultSetsResultOptions() { 
		$resultOption = new \TYPO3\Selftest\Domain\Model\Result();
		$objectStorageHoldingExactlyOneResultOptions = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneResultOptions->attach($resultOption);
		$this->fixture->setResultOptions($objectStorageHoldingExactlyOneResultOptions);

		$this->assertSame(
			$objectStorageHoldingExactlyOneResultOptions,
			$this->fixture->getResultOptions()
		);
	}
	
	/**
	 * @test
	 */
	public function addResultOptionToObjectStorageHoldingResultOptions() {
		$resultOption = new \TYPO3\Selftest\Domain\Model\Result();
		$objectStorageHoldingExactlyOneResultOption = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneResultOption->attach($resultOption);
		$this->fixture->addResultOption($resultOption);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneResultOption,
			$this->fixture->getResultOptions()
		);
	}

	/**
	 * @test
	 */
	public function removeResultOptionFromObjectStorageHoldingResultOptions() {
		$resultOption = new \TYPO3\Selftest\Domain\Model\Result();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($resultOption);
		$localObjectStorage->detach($resultOption);
		$this->fixture->addResultOption($resultOption);
		$this->fixture->removeResultOption($resultOption);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getResultOptions()
		);
	}
	
}
?>