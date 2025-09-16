<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', [
    'end_datetime' => [
        'exclude' => 0,
        'label' => 'End date & time',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'size' => 16,
            'eval' => 'datetime,int',
        ],
    ],
    'latitude' => [
        'exclude' => 0,
        'label' => 'Latitude',
        'config' => [
            'type' => 'input',
            'size' => 16
        ],
    ],
    'longitude' => [
        'exclude' => 0,
        'label' => 'Longitude',
        'config' => [
            'type' => 'input',
            'size' => 16
        ],
    ],
    'location' => [
        'exclude' => 0,
        'label' => 'Location',
        'config' => [
            'type' => 'input'
        ],
    ]
]);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tx_news_domain_model_news',
    'paletteDate',
    'end_datetime,--linebreak--,latitude,longitude,--linebreak--,location,--linebreak--',
    'after:datetime'
);

$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['fal_media']['config']['overrideChildTca']['types'][\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE]['showitem'] .= ',content,content_key';
