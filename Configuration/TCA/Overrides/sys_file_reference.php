<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config'] = [
    'type' => 'imageManipulation',
    'cropVariants' => [
        'default' => [
            'title' => 'Default',
            'allowedAspectRatios' => [
                '1:1' => ['title' => '1:1', 'value' => 1 / 1],
                '1540:720' => ['title' => '1540:720', 'value' => 1540 / 720],
                'NaN' => ['title' => 'Free', 'value' => 0.0],
            ],
            'selectedRatio' => 'NaN',
        ],
        'teaser' => [
            'title' => 'Teaser (optional)',
            'allowedAspectRatios' => [
                '1:1' => ['title' => '1:1', 'value' => 1 / 1],
                'NaN' => ['title' => 'Free', 'value' => 0.0],
            ],
            'selectedRatio' => 'NaN',
        ],
        'teaser_widescreen' => [
            'title' => 'Teaser Widescreen (optional)',
            'allowedAspectRatios' => [
                '720:480' => ['title' => '720:480', 'value' => 720 / 480],
                '555:258' => ['title' => 'Listenansicht Breitbild', 'value' => 555 / 258],
                'NaN' => ['title' => 'Free', 'value' => 0.0],
            ],
            'selectedRatio' => 'NaN',
        ]
    ]
];

$GLOBALS['TCA']['sys_file_reference']['columns']['content_key'] = [
    'label' => 'Content key',
    'exclude' => 0,
    'config' => [
        'type' => 'input'
    ]
];

$GLOBALS['TCA']['sys_file_reference']['columns']['content'] = [
    'label' => 'Content',
    'exclude' => 0,
    'config' => [
        'type' => 'text',
        'enableRichtext' => true
    ]
];
