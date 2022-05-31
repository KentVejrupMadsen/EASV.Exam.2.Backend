<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    // External
    use Illuminate\Support\Facades\Route;

    // Internal
    require_once 'homeApi.php';

    
    const CURRENT_VERSION = '1.0.0';
    const VersionUrl = '/' . CURRENT_VERSION;


    function ApiRoutes()
    {
        Route::prefix( VersionUrl )->group
        (
            function()
            {
                HomeApi();
            }
        );
    }

    ApiRoutes();
?>