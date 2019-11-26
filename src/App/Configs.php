<?php

$container->set('settings',function(){
    return (object)[
        'db' => [
            "DB_HOST" => 'localhost',
            "DB_NAME" => 'blog_api',
            "DB_USER" => 'root',
            "DB_PASS" => '',
            "DB_CHAR" => 'utf8'
        ]
    ];
});