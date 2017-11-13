<?php
/**
 * Created by PhpStorm.
 * User: roland
 * Date: 12.11.17
 * Time: 08:57
 */
if (!defined('TYPO3_MODE')) { die('Access denied.'); }

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'rlkickstart',
    'Configuration/TypoScript',
    'Resterland Kickstart Distribution'
);
