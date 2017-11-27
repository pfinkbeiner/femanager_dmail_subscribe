<?php
defined('TYPO3_MODE') || die('Access denied.');

/**
 * Include page and user TS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:'
    . $_EXTKEY . '/Configuration/TSConfig/page.t3s">'
);

/**
 * XClass for Argument, so datatype can be set
 */
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\Argument'] = array(
    'className' => 'Derhansen\\FemanagerDmailSubscribe\\Xclass\\Extbase\\Controller\Argument'
);
