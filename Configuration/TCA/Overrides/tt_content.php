<?php

$temporaryColumns = [
    'tx_rw_featured_event' => [
        'exclude' => 0,
        'label' => 'Featured Event',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => "tx_news_domain_model_news",
            'default' => 0,
            'items' => [
                ['--', 0]
            ],
            'foreign_table_where' => implode(
                " ",
                [
                    "AND tx_news_domain_model_news.uid IN (SELECT sys_category_record_mm.uid_foreign ",
                    "FROM sys_category_record_mm",
                    "INNER JOIN sys_category ON sys_category.uid = sys_category_record_mm.uid_local",
                    "WHERE sys_category.title LIKE 'Event')",
                    //"LIMIT 10",
                    "ORDER BY tx_news_domain_model_news.uid DESC"
                ]
            ),
            'maxitems' => 1
        ]
    ],
    'tx_rw_featured_event_opacity' => [
        'exclude' => 0,
        'label' => 'Opacity',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['0%', 0],
                ['10%', 10],
                ['20%', 20],
                ['30%', 30],
                ['40%', 40],
                ['50%', 50],
                ['60%', 60],
                ['70%', 70],
                ['80%', 80],
                ['90%', 90],
            ]
        ]
    ],
    'tx_rw_googlemaps_longitude' => [
        'exclude' => 0,
        'label' => 'Longitude',
        'config' => [
            'type' => 'input'
        ]
    ],
    'tx_rw_googlemaps_latitude' => [
        'exclude' => 0,
        'label' => 'Latitude',
        'config' => [
            'type' => 'input'
        ]
    ]
];


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tt_content',
    $temporaryColumns
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'tx_rw_featured_event, tx_rw_featured_event_opacity'
);


// Add the Content CE
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'Content',
        'tx_rw_content',
        'EXT:rw/ext_icon.gif'
    ],
    'CType',
    'tx_rw_content'
);

$GLOBALS['TCA']['tt_content']['types']['tx_rw_content'] = [
    'showitem' => str_replace(
            'tx_rw_featured_event, tx_rw_featured_event_opacity',
            '',
            $GLOBALS['TCA']['tt_content']['types']['textpic']['showitem']),
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
                'enableRichtext' => 1,
                'richtextConfiguration' => 'default'
            ]
        ]
    ]
];


// Add the Google Maps CE
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'Google Maps',
        'tx_rw_googlemaps',
        'EXT:rw/ext_icon.gif'
    ],
    'CType',
    'tx_rw_googlemaps'
);


$GLOBALS['TCA']['tt_content']['types']['tx_rw_googlemaps']['showitem'] = str_replace(
    'tx_rw_featured_event, tx_rw_featured_event_opacity',
    'tx_rw_googlemaps_latitude,tx_rw_googlemaps_longitude',
    $GLOBALS['TCA']['tt_content']['types']['textpic']['showitem']);

// Add additional fields to images of tt_content
$GLOBALS['TCA']['tt_content']['columns']['image']['config']['overrideChildTca']['types'][\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE]['showitem'] .= ',content';
