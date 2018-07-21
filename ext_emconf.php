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
    'version' => '2.1.2',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-8.7.99',
            'femanager' => '2.0.0-0.0.0',
            'direct_mail' => '5.0.0-0.0.0'
        ),
        'conflicts' => array(),
        'suggests' => array(),
    )
);