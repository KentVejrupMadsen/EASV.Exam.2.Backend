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
    use Illuminate\Support\Str;

    
    return 
    [
        'driver' => env('SESSION_DRIVER', 'file'),
        'lifetime' => env('SESSION_LIFETIME', 120),
        'expire_on_close' => false,
        'encrypt' => false,
        'files' => storage_path('framework/sessions'),
        'connection' => env('SESSION_CONNECTION'),
        'table' => 'sessions',
        'store' => env('SESSION_STORE'),
        'lottery' => [2, 100],
        'cookie' => env
        (
            'SESSION_COOKIE',
            Str::slug(env('APP_NAME', 'laravel'), '_').'_session'
        ),
        'path' => '/',
        'domain' => env( 'SESSION_DOMAIN' ),
        'secure' => env( 'SESSION_SECURE_COOKIE' ),
        'http_only' => true,
        'same_site' => 'strict',
    ];

?>
