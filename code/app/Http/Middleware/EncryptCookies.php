<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Http\Middleware;

    use Illuminate\Cookie\Middleware\EncryptCookies
        as Middleware;


    class EncryptCookies
        extends Middleware
    {
        /**
         * The names of the cookies that should not be encrypted.
         *
         * @var array<int, string>
         */
        protected $except =
        [
            //
        ];
    }
?>
