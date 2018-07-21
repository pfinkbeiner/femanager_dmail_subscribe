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

use Derhansen\FemanagerDmailSubscribe\Domain\Repository\DmailCategoryRepository;

/**
 * Class NewController
 */
class NewController extends \In2code\Femanager\Controller\NewController
{
    /**
     * Directmail Category Repository
     *
     * @var \Derhansen\FemanagerDmailSubscribe\Domain\Repository\DmailCategoryRepository
     */
    protected $dmailCategoryRepository;

    /**
     * DI for dmailCategoryRepository
     *
     * @param DmailCategoryRepository $dmailCategoryRepository
     * @return void
     */
    public function injectDmailCategoryRespository(DmailCategoryRepository $dmailCategoryRepository)
    {
        $this->dmailCategoryRepository = $dmailCategoryRepository;
    }

    /**
     * Workaround to avoid php7 warnings of wrong type hint.
     */
    public function initializeNewAction()
    {
        if ($this->arguments->hasArgument('user')) {
            /** @var \Derhansen\FemanagerDmailSubscribe\Xclass\Extbase\Controller\Argument $user */
            $user = $this->arguments['user'];
            $user->setDataType(\Derhansen\FemanagerDmailSubscribe\Domain\Model\User::class);
        }
    }

    /**
     * New action
     *
     * @param \In2code\Femanager\Domain\Model\User $user
     * @dontvalidate $user
     * @return void
     */
    public function newAction(\In2code\Femanager\Domain\Model\User $user = null)
    {
        $dmailCategories = $this->dmailCategoryRepository->findAll();
        $this->view->assign('dmailCategories', $dmailCategories);
        parent::newAction();
    }

    /**
     * Workaround to avoid php7 warnings of wrong type hint.
     */
    public function initializeCreateAction()
    {
        if ($this->arguments->hasArgument('user')) {
            /** @var \Derhansen\FemanagerDmailSubscribe\Xclass\Extbase\Controller\Argument $user */
            $user = $this->arguments['user'];
            $user->setDataType(\Derhansen\FemanagerDmailSubscribe\Domain\Model\User::class);
        }
    }

    /**
     * Create action
     *
     * @param \In2code\Femanager\Domain\Model\User $user
     * @validate $user In2code\Femanager\Domain\Validator\ServersideValidator
     * @validate $user In2code\Femanager\Domain\Validator\PasswordValidator
     * @validate $user In2code\Femanager\Domain\Validator\CaptchaValidator
     * @return void
     */
    public function createAction(\In2code\Femanager\Domain\Model\User $user)
    {
        parent::createAction($user);
    }
}
