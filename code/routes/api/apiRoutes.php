<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;

    require_once 'homeApi.php';

    const CURRENT_VERSION = '1.0.0';
    const VersionUrl = '/' . CURRENT_VERSION;


    Route::prefix( VersionUrl )->group(
        function()
        {
            HomeApi();
        }
    );
?>