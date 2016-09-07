<?php
namespace OliverThiele\OtEvents\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Robert Stümer <robert.stuemer@gmail.com>, ZGS
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
 * Test case for class OliverThiele\OtEvents\Controller\EventLocationController.
 *
 * @author Robert Stümer <robert.stuemer@gmail.com>
 */
class EventLocationControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \OliverThiele\OtEvents\Controller\EventLocationController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('OliverThiele\\OtEvents\\Controller\\EventLocationController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllEventLocationsFromRepositoryAndAssignsThemToView()
	{

		$allEventLocations = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$eventLocationRepository = $this->getMock('OliverThiele\\OtEvents\\Domain\\Repository\\EventLocationRepository', array('findAll'), array(), '', FALSE);
		$eventLocationRepository->expects($this->once())->method('findAll')->will($this->returnValue($allEventLocations));
		$this->inject($this->subject, 'eventLocationRepository', $eventLocationRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('eventLocations', $allEventLocations);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenEventLocationToView()
	{
		$eventLocation = new \OliverThiele\OtEvents\Domain\Model\EventLocation();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('eventLocation', $eventLocation);

		$this->subject->showAction($eventLocation);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenEventLocationToEventLocationRepository()
	{
		$eventLocation = new \OliverThiele\OtEvents\Domain\Model\EventLocation();

		$eventLocationRepository = $this->getMock('OliverThiele\\OtEvents\\Domain\\Repository\\EventLocationRepository', array('add'), array(), '', FALSE);
		$eventLocationRepository->expects($this->once())->method('add')->with($eventLocation);
		$this->inject($this->subject, 'eventLocationRepository', $eventLocationRepository);

		$this->subject->createAction($eventLocation);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenEventLocationToView()
	{
		$eventLocation = new \OliverThiele\OtEvents\Domain\Model\EventLocation();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('eventLocation', $eventLocation);

		$this->subject->editAction($eventLocation);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenEventLocationInEventLocationRepository()
	{
		$eventLocation = new \OliverThiele\OtEvents\Domain\Model\EventLocation();

		$eventLocationRepository = $this->getMock('OliverThiele\\OtEvents\\Domain\\Repository\\EventLocationRepository', array('update'), array(), '', FALSE);
		$eventLocationRepository->expects($this->once())->method('update')->with($eventLocation);
		$this->inject($this->subject, 'eventLocationRepository', $eventLocationRepository);

		$this->subject->updateAction($eventLocation);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenEventLocationFromEventLocationRepository()
	{
		$eventLocation = new \OliverThiele\OtEvents\Domain\Model\EventLocation();

		$eventLocationRepository = $this->getMock('OliverThiele\\OtEvents\\Domain\\Repository\\EventLocationRepository', array('remove'), array(), '', FALSE);
		$eventLocationRepository->expects($this->once())->method('remove')->with($eventLocation);
		$this->inject($this->subject, 'eventLocationRepository', $eventLocationRepository);

		$this->subject->deleteAction($eventLocation);
	}
}
