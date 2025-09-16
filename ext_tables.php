<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Vtm.rw',
    'Sitemap',
    'Sitemap plugin'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    "rw",
    "Configuration/TypoScript",
    "Reason Why"
);

// Extend news templates
if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['templateLayouts'])) {
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['templateLayouts'] = [];
}
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['templateLayouts'] = array_merge(
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['templateLayouts'],
    [
        0 => ['Home bottom layout', '10'],
        1 => ['Upcoming events', '30'],
        2 => ['Ajax slider', '50'],
        3 => ['Event list', '70'],
        4 => ['Tech and Business News Liste', '80'],
        5 => ['List Layout 2022 List with Ajax', '90'],
        6 => ['List Layout 2022 Top Single', '89'],
    ]
);
