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
class Result extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * the title of the solution
	 *
	 * @var \string
	 */
	protected $title;

	/**
	 * Explaning the result
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $explanation;

	/**
	 * image
	 *
	 * @var \string
	 */
	protected $image;

	/**
	 * Result is shown if points are equal or above the lower limit
	 *
	 * @var \integer
	 * @validate NotEmpty
	 */
	protected $lowerLimit;

	/**
	 * Result is shown if points are equal or lower the upper limit and above or equal to lower limit
	 *
	 * @var \integer
	 */
	protected $upperLimit;

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
	 * Returns the explanation
	 *
	 * @return \string $explanation
	 */
	public function getExplanation() {
		return $this->explanation;
	}

	/**
	 * Sets the explanation
	 *
	 * @param \string $explanation
	 * @return void
	 */
	public function setExplanation($explanation) {
		$this->explanation = $explanation;
	}

	/**
	 * Returns the image
	 *
	 * @return \string $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param \string $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * Returns the lowerLimit
	 *
	 * @return \integer $lowerLimit
	 */
	public function getLowerLimit() {
		return $this->lowerLimit;
	}

	/**
	 * Sets the lowerLimit
	 *
	 * @param \integer $lowerLimit
	 * @return void
	 */
	public function setLowerLimit($lowerLimit) {
		$this->lowerLimit = $lowerLimit;
	}

	/**
	 * Returns the upperLimit
	 *
	 * @return \integer $upperLimit
	 */
	public function getUpperLimit() {
		return $this->upperLimit;
	}

	/**
	 * Sets the upperLimit
	 *
	 * @param \integer $upperLimit
	 * @return void
	 */
	public function setUpperLimit($upperLimit) {
		$this->upperLimit = $upperLimit;
	}

}
?>