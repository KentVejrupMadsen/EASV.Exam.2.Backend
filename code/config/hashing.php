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
        'driver' => 'argon',
        'bcrypt' =>
        [
            'rounds' => env( 'BCRYPT_ROUNDS', 10 ),
        ],
        'argon' =>
        [
            'memory' => 65536,
            'threads' => 1,
            'time' => 4,
        ],
    ];
?>
