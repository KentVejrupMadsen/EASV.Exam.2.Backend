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
    use Illuminate\Auth\Middleware\Authenticate
        as Middleware;


    class Authenticate
        extends Middleware
    {
        /**
         * Get the path the user should be redirected to when they are not authenticated.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return string|null
         */
        protected function redirectTo( $request )
        {
            if (! $request->expectsJson() )
            {
                return route('login');
            }
        }
    }
?>
