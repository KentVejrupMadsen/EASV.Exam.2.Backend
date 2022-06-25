<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    return 
    [
        'default' => env( 'BROADCAST_DRIVER', 'null' ),
        'connections' => 
        [
            'pusher' => 
            [
                'driver' => 'pusher',
                'key' => env( 'PUSHER_APP_KEY' ),
                'secret' => env( 'PUSHER_APP_SECRET' ),
                'app_id' => env( 'PUSHER_APP_ID' ),
                'options' => 
                [
                    'cluster' => env( 'PUSHER_APP_CLUSTER' ),
                    'useTLS' => true,
                ],
                'client_options' => 
                [
                    // Guzzle client options: https://docs.guzzlephp.org/en/stable/request-options.html
                ],
            ],
            'ably' => 
            [
                'driver' => 'ably',
                'key' => env( 'ABLY_KEY' ),
            ],
            'redis' => 
            [
                'driver' => 'redis',
                'connection' => 'default',
            ],
            'log' => 
            [
                'driver' => 'log',
            ],
            'null' => 
            [
                'driver' => 'null',
            ],
        ],
    ];
?>
