<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
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