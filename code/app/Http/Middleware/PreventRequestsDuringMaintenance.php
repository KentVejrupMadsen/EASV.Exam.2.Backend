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
    use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance
        as Middleware;


    class PreventRequestsDuringMaintenance
        extends Middleware
    {
        /**
         * The URIs that should be reachable while maintenance mode is enabled.
         *
         * @var array<int, string>
         */
        protected $except =
        [
            //
        ];
    }
?>
