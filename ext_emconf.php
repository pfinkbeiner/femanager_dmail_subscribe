<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'femanager direct mail subscription',
    'description' => 'Adds direct mail fields to femanager',
    'category' => 'plugin',
    'author' => 'Torben Hansen',
    'author_email' => 'derhansen@gmail.com',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.2.0-6.2.99',
            'femanager' => '1.0.0-1.5.99',
            'direct_mail' => '4.0.0-4.1.00'
        ),
        'conflicts' => array(),
        'suggests' => array(),
    )
);