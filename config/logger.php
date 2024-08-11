<?php


// LogFile: куда писать? 
// LogEmail: куда отправлять
// LogDATABASE: в какую базу писать, в какую таблицу и тд
return [
    'default_logger_type' => 'email',

    'config' => [
        'email' => [
            'receiver' => 'kek@mail.kz',
        ],
        'file' => [
            'file_path'=> '/path/to/log.log',
        ],
        'database' => [
            'table' => 'logs'
        ]
    ]
];