<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

/**
 * Include page and user TS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:'
    . $_EXTKEY . '/Configuration/TSConfig/page.t3s">'
);
