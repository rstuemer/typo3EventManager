<?php
namespace OliverThiele\OtEvents\Controller;

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

/**
 * EventLocationController
 */
class EventLocationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * eventLocationRepository
     *
     * @var \OliverThiele\OtEvents\Domain\Repository\EventLocationRepository
     * @inject
     */
    protected $eventLocationRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $eventLocations = $this->eventLocationRepository->findAll();
        $this->view->assign('eventLocations', $eventLocations);
    }
    
    /**
     * action show
     *
     * @param \OliverThiele\OtEvents\Domain\Model\EventLocation $eventLocation
     * @return void
     */
    public function showAction(\OliverThiele\OtEvents\Domain\Model\EventLocation $eventLocation)
    {
        $this->view->assign('eventLocation', $eventLocation);
    }
    
    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {
        
    }
    
    /**
     * action create
     *
     * @param \OliverThiele\OtEvents\Domain\Model\EventLocation $newEventLocation
     * @return void
     */
    public function createAction(\OliverThiele\OtEvents\Domain\Model\EventLocation $newEventLocation)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->eventLocationRepository->add($newEventLocation);
        $this->redirect('list');
    }
    
    /**
     * action edit
     *
     * @param \OliverThiele\OtEvents\Domain\Model\EventLocation $eventLocation
     * @ignorevalidation $eventLocation
     * @return void
     */
    public function editAction(\OliverThiele\OtEvents\Domain\Model\EventLocation $eventLocation)
    {
        $this->view->assign('eventLocation', $eventLocation);
    }
    
    /**
     * action update
     *
     * @param \OliverThiele\OtEvents\Domain\Model\EventLocation $eventLocation
     * @return void
     */
    public function updateAction(\OliverThiele\OtEvents\Domain\Model\EventLocation $eventLocation)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->eventLocationRepository->update($eventLocation);
        $this->redirect('list');
    }
    
    /**
     * action delete
     *
     * @param \OliverThiele\OtEvents\Domain\Model\EventLocation $eventLocation
     * @return void
     */
    public function deleteAction(\OliverThiele\OtEvents\Domain\Model\EventLocation $eventLocation)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->eventLocationRepository->remove($eventLocation);
        $this->redirect('list');
    }

}