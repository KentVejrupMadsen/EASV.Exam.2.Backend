<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    // External libraries
    use Illuminate\Support\Facades\Route;


    // Routes, note. web is disabled by default and the user is asked to redirect to api
    Route::get(
        '/',
        function() 
        {
            return view( 'home' );
        }
    );
?>
