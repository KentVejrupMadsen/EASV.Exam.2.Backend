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

	// External
    use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken
        as Middleware;


    class VerifyCsrfToken
        extends Middleware
    {
        /**
         * The URIs that should be excluded from CSRF verification.
         *
         * @var array<int, string>
         */
        protected $except =
        [
            '*'
        ];
    }
?>
