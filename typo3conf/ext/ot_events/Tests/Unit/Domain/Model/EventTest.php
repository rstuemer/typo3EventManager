<?php

namespace OliverThiele\OtEvents\Tests\Unit\Domain\Model;

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
 * Test case for class \OliverThiele\OtEvents\Domain\Model\Event.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Robert Stümer <robert.stuemer@gmail.com>
 */
class EventTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \OliverThiele\OtEvents\Domain\Model\Event
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \OliverThiele\OtEvents\Domain\Model\Event();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle()
	{
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSubtitleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSubtitle()
		);
	}

	/**
	 * @test
	 */
	public function setSubtitleForStringSetsSubtitle()
	{
		$this->subject->setSubtitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'subtitle',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPathSegmentReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getPathSegment()
		);
	}

	/**
	 * @test
	 */
	public function setPathSegmentForStringSetsPathSegment()
	{
		$this->subject->setPathSegment('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'pathSegment',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEventDateTimeStartReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getEventDateTimeStart()
		);
	}

	/**
	 * @test
	 */
	public function setEventDateTimeStartForDateTimeSetsEventDateTimeStart()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setEventDateTimeStart($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'eventDateTimeStart',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEventDateTimeStopReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getEventDateTimeStop()
		);
	}

	/**
	 * @test
	 */
	public function setEventDateTimeStopForDateTimeSetsEventDateTimeStop()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setEventDateTimeStop($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'eventDateTimeStop',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getIsTopEventReturnsInitialValueForBool()
	{
		$this->assertSame(
			FALSE,
			$this->subject->getIsTopEvent()
		);
	}

	/**
	 * @test
	 */
	public function setIsTopEventForBoolSetsIsTopEvent()
	{
		$this->subject->setIsTopEvent(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'isTopEvent',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTeaserReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTeaser()
		);
	}

	/**
	 * @test
	 */
	public function setTeaserForStringSetsTeaser()
	{
		$this->subject->setTeaser('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'teaser',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBodytextReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getBodytext()
		);
	}

	/**
	 * @test
	 */
	public function setBodytextForStringSetsBodytext()
	{
		$this->subject->setBodytext('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'bodytext',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPreviewImageReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getPreviewImage()
		);
	}

	/**
	 * @test
	 */
	public function setPreviewImageForFileReferenceSetsPreviewImage()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setPreviewImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'previewImage',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImagesReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getImages()
		);
	}

	/**
	 * @test
	 */
	public function setImagesForFileReferenceSetsImages()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImages($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'images',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDocumentsReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getDocuments()
		);
	}

	/**
	 * @test
	 */
	public function setDocumentsForFileReferenceSetsDocuments()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setDocuments($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'documents',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEventLocationReturnsInitialValueForEventLocation()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getEventLocation()
		);
	}

	/**
	 * @test
	 */
	public function setEventLocationForEventLocationSetsEventLocation()
	{
		$eventLocationFixture = new \OliverThiele\OtEvents\Domain\Model\EventLocation();
		$this->subject->setEventLocation($eventLocationFixture);

		$this->assertAttributeEquals(
			$eventLocationFixture,
			'eventLocation',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEventCategoriesReturnsInitialValueForEventCategory()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getEventCategories()
		);
	}

	/**
	 * @test
	 */
	public function setEventCategoriesForObjectStorageContainingEventCategorySetsEventCategories()
	{
		$eventCategory = new \OliverThiele\OtEvents\Domain\Model\EventCategory();
		$objectStorageHoldingExactlyOneEventCategories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneEventCategories->attach($eventCategory);
		$this->subject->setEventCategories($objectStorageHoldingExactlyOneEventCategories);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneEventCategories,
			'eventCategories',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addEventCategoryToObjectStorageHoldingEventCategories()
	{
		$eventCategory = new \OliverThiele\OtEvents\Domain\Model\EventCategory();
		$eventCategoriesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$eventCategoriesObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($eventCategory));
		$this->inject($this->subject, 'eventCategories', $eventCategoriesObjectStorageMock);

		$this->subject->addEventCategory($eventCategory);
	}

	/**
	 * @test
	 */
	public function removeEventCategoryFromObjectStorageHoldingEventCategories()
	{
		$eventCategory = new \OliverThiele\OtEvents\Domain\Model\EventCategory();
		$eventCategoriesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$eventCategoriesObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($eventCategory));
		$this->inject($this->subject, 'eventCategories', $eventCategoriesObjectStorageMock);

		$this->subject->removeEventCategory($eventCategory);

	}
}
