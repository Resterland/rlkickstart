<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// Add PageTs configuration file
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="DIR:EXT:rlkickstart/Configuration/TSconfig/Page" extension="ts">'
);

// Add UserTs configuration file
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="DIR:EXT:rlkickstart/Configuration/TSconfig/User" extension="ts">'
);
