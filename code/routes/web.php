<?php
    /**
     * Author: Kent vejrup Madsen
     */
    use Illuminate\Support\Facades\Route;


    Route::get(
        '/',
        function() 
        {
            return view('welcome');
        }
    );
?>