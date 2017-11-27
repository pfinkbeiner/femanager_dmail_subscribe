<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'femanager_dmail_subscribe',
    'Configuration/TypoScript',
    'femanager direct mail subscription'
);
