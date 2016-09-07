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
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * EventController
 */
class EventController extends ActionController
{

    /**
     * eventRepository
     *
     * @var \OliverThiele\OtEvents\Domain\Repository\EventRepository
     * @inject
     */
    protected $eventRepository = NULL;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $events = $this->eventRepository->findAll();
        $this->view->assign('events', $events);
    }

    /**
     * action show
     *
     * @param \OliverThiele\OtEvents\Domain\Model\Event $event
     * @return void
     */
    public function showAction(\OliverThiele\OtEvents\Domain\Model\Event $event)
    {
        $this->view->assign('event', $event);
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
     * @param \OliverThiele\OtEvents\Domain\Model\Event $newEvent
     * @return void
     */
    public function createAction(\OliverThiele\OtEvents\Domain\Model\Event $newEvent)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->eventRepository->add($newEvent);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \OliverThiele\OtEvents\Domain\Model\Event $event
     * @ignorevalidation $event
     * @return void
     */
    public function editAction(\OliverThiele\OtEvents\Domain\Model\Event $event)
    {
        $this->view->assign('event', $event);
    }

    /**
     * action update
     *
     * @param \OliverThiele\OtEvents\Domain\Model\Event $event
     * @return void
     */
    public function updateAction(\OliverThiele\OtEvents\Domain\Model\Event $event)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->eventRepository->update($event);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \OliverThiele\OtEvents\Domain\Model\Event $event
     * @return void
     */
    public function deleteAction(\OliverThiele\OtEvents\Domain\Model\Event $event)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->eventRepository->remove($event);
        $this->redirect('list');
    }

}
