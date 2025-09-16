<?php

// TYPO3_MODE Check entfernt - nicht mehr benötigt in TYPO3 12
defined('TYPO3') or die();

// Plugin-Konfiguration bleibt gleich, funktioniert in TYPO3 12
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Rw',
    'ReasonWhy',
    [\Vtm\Rw\Controller\PageController::class => 'default,plain'],
    [\Vtm\Rw\Controller\PageController::class => 'default,plain'],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Rw',
    'Sitemap',
    [\Vtm\Rw\Controller\SitemapController::class => 'index'],
    [\Vtm\Rw\Controller\SitemapController::class => 'index'],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

// News Model Extension - funktioniert weiterhin
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'rw';
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/FileReference'][] = 'rw';

// CK-Editor Presets - funktionieren weiterhin
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['ttnews'] = 'EXT:rw/Configuration/RTE/TTNews.yaml';
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['ttcontent'] = 'EXT:rw/Configuration/RTE/TTContent.yaml';

// CS SEO Konfiguration - prüfen ob cs_seo TYPO3 12 kompatibel ist
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cs_seo']['yamlConfigFile'] = 'EXT:rw/Configuration/CsSeo/config.yaml';
