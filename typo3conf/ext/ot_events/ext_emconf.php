<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "ot_events"
 * Auto generated by Extension Builder 2016-09-06
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'typo3EventManager',
    'description' => 'Event Manager',
    'category' => 'plugin',
    'author' => 'Robert Stümer',
    'author_email' => 'robert.stuemer@gmail.com',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => '1',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-7.6.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => ['OliverThiele\\OtEvents\\' => 'Classes']
    ],
];
