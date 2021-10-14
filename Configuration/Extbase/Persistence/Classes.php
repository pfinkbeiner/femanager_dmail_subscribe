<?php
declare(strict_types = 1);

return [
    \Derhansen\FemanagerDmailSubscribe\Domain\Model\User::class => [
        'tableName' => 'fe_users',
        'recordType' => 0
    ],

    \In2code\Femanager\Domain\Model\User::class => [
        'subclasses' => [
          0 => \Derhansen\FemanagerDmailSubscribe\Domain\Model\User::class
        ]
    ],

    \Derhansen\FemanagerDmailSubscribe\Domain\Model\DmailCategory::class => [

        'tableName' => 'sys_dmail_category',
        'recordType' => '\Derhansen\FemanagerDmailSubscribe\Domain\Model\DmailCategory',
        'properties' => [
            'category' => [
                'fieldName' => 'category'
            ]
        ]
    ]
];

