<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Sources Details
    |--------------------------------------------------------------------------
    |
    | This is a collection of sources from where to fetch this sites analytics information.
    |
    */
    
    'connections' => [
        [
            'type' => 'mysql',
            'host' => 'localhost',
            'username' => 'username',
            'password' => 'password'
        ],
        [
            'type' => 'service',
            'host' => 'api.analytics.google.com',
            'key' => 'service-key',
            'secret' => 'xxxxxxxxx-23232'
        ]
    ]
];