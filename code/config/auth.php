<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License
        * (https://github.com/KentVejrupMadsen/EASV.Exam.2.Backend/blob/main/License.md)
        * (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    use App\Models\tables\User;


    return
    [
        'defaults' =>
        [
            'guard' => 'web',
            'passwords' => 'users',
        ],
        'guards' =>
        [
            'web' =>
            [
                'driver' => 'session',
                'provider' => 'users',
            ],
        ],
        'providers' =>
        [
            'users' =>
            [
                'driver' => 'eloquent',
                'model' => User::class,
            ],
            // 'users' => [
            //     'driver' => 'database',
            //     'table' => 'users',
            // ],
        ],
        'passwords' =>
        [
            'users' =>
            [
                'provider' => 'users',
                'table' => 'password_resets',
                'expire' => 60,
                'throttle' => 60,
            ],
        ],
        'password_timeout' => 10800,
    ];
?>
