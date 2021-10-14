<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {
        /**
         * Include page and user TS
         */
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:femanager_dmail_subscribe/Configuration/TSConfig/page.t3s">'
        );

        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class)
            ->registerImplementation(\In2code\Femanager\Controller\NewController::class, \Derhansen\FemanagerDmailSubscribe\Controller\NewController::class);

        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class)
            ->registerImplementation(\In2code\Femanager\Controller\EditController::class, \Derhansen\FemanagerDmailSubscribe\Controller\EditController::class);

        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class)
            ->registerImplementation(\In2code\Femanager\Domain\Model\User::class, \Derhansen\FemanagerDmailSubscribe\Domain\Model\User::class);


        /**
         * XClass for Argument, so datatype can be set
         */
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Extbase\Mvc\Controller\Argument::class] = [
            'className' => \Derhansen\FemanagerDmailSubscribe\Xclass\Extbase\Mvc\Controller\Argument::class
        ];
    },
    $_EXTKEY
);
