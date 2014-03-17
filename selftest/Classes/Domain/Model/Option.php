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
class Option extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * the title of the option
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * points for evaluation
	 *
	 * @var \integer
	 * @validate NotEmpty
	 */
	protected $points;

    /**
     * sorting for display
     *
     * @var \integer
     */
    protected $sorting;


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
	 * Returns the points
	 *
	 * @return \integer $points
	 */
	public function getPoints() {
		return $this->points;
	}

	/**
	 * Sets the points
	 *
	 * @param \integer $points
	 * @return void
	 */
	public function setPoints($points) {
		$this->points = $points;
	}

    /**
     * Returns the sorting
     *
     * @return \integer $sorting
     */
    public function getSorting() {
        return $this->sorting;
    }

    /**
     * Sets the sorting
     *
     * @param \integer $sorting
     * @return void
     */
    public function setSorting($sorting) {
        $this->sorting = $sorting;
    }

}
?>