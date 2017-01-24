<?php
namespace Derhansen\FemanagerDmailSubscribe\Controller;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use \Derhansen\FemanagerDmailSubscribe\Domain\Model\User;

/**
 * Class EditController
 */
class EditController extends \In2\Femanager\Controller\EditController
{

    /**
     * @var \Derhansen\FemanagerDmailSubscribe\Domain\Repository\DmailCategoryRepository
     * @inject
     */
    protected $dmailCategoryRepository;

    /**
     * Edit action
     *
     * @return void
     */
    public function editAction()
    {
        $dmailCategories = $this->dmailCategoryRepository->findAll();
        $this->view->assign('dmailCategories', $dmailCategories);
        parent::editAction();
    }

    /**
     * action update
     *
     * @param \Derhansen\FemanagerDmailSubscribe\Domain\Model\User $user
     * @validate $user In2\Femanager\Domain\Validator\ServersideValidator
     * @validate $user In2\Femanager\Domain\Validator\PasswordValidator
     * @return void
     */
    public function updateAction(User $user)
    {
        parent::updateAction($user);
    }
}
