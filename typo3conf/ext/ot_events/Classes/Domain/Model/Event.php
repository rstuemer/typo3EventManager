<?php
namespace OliverThiele\OtEvents\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Robert Stümer <robert.stuemer@gmail.com>, ZGS
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

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Event
 */
class Event extends AbstractEntity
{

    /**
     * Title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * Subtitle
     *
     * @var string
     */
    protected $subtitle = '';

    /**
     * pathSegment
     *
     * @var string
     */
    protected $pathSegment = '';

    /**
     * Start Zeit
     *
     * @var \DateTime
     * @validate NotEmpty
     * @validate DateTime
     */
    protected $eventDateTimeStart = null;

    /**
     * eventDateTimeStop
     *
     * @var \DateTime
     */
    protected $eventDateTimeStop = null;

    /**
     * Top Event
     *
     * @var bool
     */
    protected $isTopEvent = false;

    /**
     * Teaser
     *
     * @var string
     */
    protected $teaser = '';

    /**
     * RTE-Text
     *
     * @var string
     */
    protected $bodytext = '';

    /**
     * Preview Image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $previewImage = null;

    /**
     * Images
     *
     * @var  \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     */
    protected $images = null;

    /**
     * Documents
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     */
    protected $documents = null;

    /**
     * Event Location
     *
     * @var \OliverThiele\OtEvents\Domain\Model\EventLocation
     * @lazy
     */
    protected $eventLocation = null;

    /**
     * Event categories
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\OliverThiele\OtEvents\Domain\Model\EventCategory>
     * @lazy
     */
    protected $eventCategories = null;

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->eventCategories = new ObjectStorage();
        //$this->images = new ObjectStorage();
         //$this->documents = new ObjectStorage();
    }
    /**
     * Returns the eventLocation
     *
     * @return \OliverThiele\OtEvents\Domain\Model\EventLocation $eventLocation
     */
    public function getEventLocation()
    {
        return $this->eventLocation;
    }

    /**
     * Sets the eventLocation
     *
     * @param \OliverThiele\OtEvents\Domain\Model\EventLocation $eventLocation
     * @return void
     */
    public function setEventLocation(\OliverThiele\OtEvents\Domain\Model\EventLocation $eventLocation)
    {
        $this->eventLocation = $eventLocation;
    }

    /**
     * Adds a EventCategory
     *
     * @param \OliverThiele\OtEvents\Domain\Model\EventCategory $eventCategory
     * @return void
     */
    public function addEventCategory(EventCategory $eventCategory)
    {
        $this->eventCategories->attach($eventCategory);
    }

    /**
     * Removes a EventCategory
     *
     * @param \OliverThiele\OtEvents\Domain\Model\EventCategory  $eventCategoryToRemove The EventCategory to be removed
     * @return void
     */
    public function removeEventCategory(EventCategory $eventCategoryToRemove)
    {
        $this->eventCategories->detach($eventCategoryToRemove);
    }

    /**
     * Returns the eventCategories
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\OliverThiele\OtEvents\Domain\Model\EventCategory> $eventCategories
     */
    public function getEventCategories()
    {
        return $this->eventCategories;
    }

    /**
     * Sets the eventCategories
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\OliverThiele\OtEvents\Domain\Model\EventCategory> $eventCategories
     * @return void
     */
    public function setEventCategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $eventCategories)
    {
        $this->eventCategories = $eventCategories;
    }

    /**
     * Returns the subtitle
     *
     * @return string $subtitle
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Sets the subtitle
     *
     * @param string $subtitle
     * @return void
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }

    /**
     * Returns the pathSegment
     *
     * @return string $pathSegment
     */
    public function getPathSegment()
    {
        return $this->pathSegment;
    }

    /**
     * Sets the pathSegment
     *
     * @param string $pathSegment
     * @return void
     */
    public function setPathSegment($pathSegment)
    {
        $this->pathSegment = $pathSegment;
    }

    /**
     * Returns the eventDateTimeStart
     *
     * @return \DateTime $eventDateTimeStart
     */
    public function getEventDateTimeStart()
    {
        return $this->eventDateTimeStart;
    }

    /**
     * Sets the eventDateTimeStart
     *
     * @param \DateTime $eventDateTimeStart
     * @return void
     */
    public function setEventDateTimeStart(\DateTime $eventDateTimeStart)
    {
        $this->eventDateTimeStart = $eventDateTimeStart;
    }

    /**
     * Returns the eventDateTimeStop
     *
     * @return \DateTime $eventDateTimeStop
     */
    public function getEventDateTimeStop()
    {
        return $this->eventDateTimeStop;
    }

    /**
     * Sets the eventDateTimeStop
     *
     * @param \DateTime $eventDateTimeStop
     * @return void
     */
    public function setEventDateTimeStop(\DateTime $eventDateTimeStop)
    {
        $this->eventDateTimeStop = $eventDateTimeStop;
    }

    /**
     * Returns the isTopEvent
     *
     * @return bool $isTopEvent
     */
    public function getIsTopEvent()
    {
        return $this->isTopEvent;
    }

    /**
     * Sets the isTopEvent
     *
     * @param bool $isTopEvent
     * @return void
     */
    public function setIsTopEvent($isTopEvent)
    {
        $this->isTopEvent = $isTopEvent;
    }

    /**
     * Returns the boolean state of isTopEvent
     *
     * @return bool
     */
    public function isIsTopEvent()
    {
        return $this->isTopEvent;
    }

    /**
     * Returns the teaser
     *
     * @return string $teaser
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * Sets the teaser
     *
     * @param string $teaser
     * @return void
     */
    public function setTeaser($teaser)
    {
        $this->teaser = $teaser;
    }

    /**
     * Returns the bodytext
     *
     * @return string $bodytext
     */
    public function getBodytext()
    {
        return $this->bodytext;
    }

    /**
     * Sets the bodytext
     *
     * @param string $bodytext
     * @return void
     */
    public function setBodytext($bodytext)
    {
        $this->bodytext = $bodytext;
    }

    /**
     * Returns the previewImage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $previewImage
     */
    public function getPreviewImage()
    {
        return $this->previewImage;
    }

    /**
     * Sets the previewImage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $previewImage
     * @return void
     */
    public function setPreviewImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $previewImage)
    {
        $this->previewImage = $previewImage;
    }

    /**
     * Returns the images
     *
     * @return   \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $images
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the images
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $images
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $images)
    {
        $this->images = $images;
    }



    /**
     * Returns the documents
     *
     * @return  \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $documents
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Sets the documents
     *
     * @param  \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $documents
     * @return void
     */
    public function setDocuments(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $documents)   {
        $this->documents = $documents;
    }

}
