<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
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