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
    use Laravel\Sanctum\Sanctum;


    return 
    [
        'stateful' => explode(
        ',', 
            env( 'SANCTUM_STATEFUL_DOMAINS', 
                 sprintf(
                         '%s%s',
                         'localhost,localhost:3000,127.0.0.1,127.0.0.1:8000,::1',
                         Sanctum::currentApplicationUrlWithPort()
                        )
               )
        ),
        'guard' => [ 'web' ],
        'expiration' => null,
        'middleware' => 
        [
            'verify_csrf_token' => App\Http\Middleware\VerifyCsrfToken::class,
            'encrypt_cookies' => App\Http\Middleware\EncryptCookies::class,
        ],

    ];
?>
