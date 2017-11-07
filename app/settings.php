<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
            'cache_dir' => __DIR__ . '/../var/cache/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'sample-php-project',
            'log_file' => __DIR__ . "/../var/logs/app.log",
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
