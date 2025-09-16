<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Vtm.rw',
    'ReasonWhy',
    [
        'Page' => 'default,plain'
    ]
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Vtm.rw',
    'Sitemap',
    [
        'Sitemap' => 'index'
    ]
);

// Add own news model
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'rw';
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/FileReference'][] = 'rw';

// CK-Editor presets
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['ttnews'] = 'EXT:rw/Configuration/RTE/TTNews.yaml';
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['ttcontent'] = 'EXT:rw/Configuration/RTE/TTContent.yaml';

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cs_seo']['yamlConfigFile'] = 'EXT:rw/Configuration/CsSeo/config.yaml';