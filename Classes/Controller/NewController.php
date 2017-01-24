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
 * Class NewController
 */
class NewController extends \In2code\Femanager\Controller\NewController
{

    /**
     * @var \Derhansen\FemanagerDmailSubscribe\Domain\Repository\DmailCategoryRepository
     * @inject
     */
    protected $dmailCategoryRepository;

    /**
     * New action
     *
     * @param User $user
     * @dontvalidate $user
     * @return void
     */
    public function newAction(User $user = null)
    {
        $dmailCategories = $this->dmailCategoryRepository->findAll();
        $this->view->assign('dmailCategories', $dmailCategories);
        parent::newAction();
    }

    /**
     * action create
     *
     * @param \Derhansen\FemanagerDmailSubscribe\Domain\Model\User $user
     * @validate $user In2code\Femanager\Domain\Validator\ServersideValidator
     * @validate $user In2code\Femanager\Domain\Validator\PasswordValidator
     * @return void
     */
    public function createAction(User $user)
    {
        parent::createAction($user);
    }
}
