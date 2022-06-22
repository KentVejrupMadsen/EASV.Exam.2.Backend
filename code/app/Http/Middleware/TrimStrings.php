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
    use Illuminate\Foundation\Http\Middleware\TrimStrings
        as Middleware;


    class TrimStrings
        extends Middleware
    {
        /**
         * The names of the attributes that should not be trimmed.
         *
         * @var array<int, string>
         */
        protected $except =
        [
            'current_password',
            'password',
            'password_confirmation',
        ];
    }
?>
