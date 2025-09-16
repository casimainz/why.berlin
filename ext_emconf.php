<?php
// ================================================================
// ext_emconf.php - AKTUALISIERT FÜR TYPO3 12
// ================================================================

$EM_CONF[$_EXTKEY] = [
    'title' => 'Reason Why',
    'description' => 'Main extension for website reason-why.berlin',
    'category' => 'plugin',
    'author' => 'Rozbeh Chiryai Sharahi',
    'author_email' => 'rozbeh.sharahi@votum.de',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0', // Versionsnummer hinzugefügt
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99', // AKTUALISIERT für TYPO3 12 LTS
            'news' => '11.0.0-11.99.99'  // News Extension für TYPO3 12
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];