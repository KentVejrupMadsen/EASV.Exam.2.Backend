<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;



    require_once 'account/accountRoutes.php';
    require_once 'options/optionsRoutes.php';
    require_once 'security/securityRoutes.php';
    require_once 'tool/toolRoutes.php';


    const CURRENT_VERSION = '1.0.0';
    const VersionUrl = '/' . CURRENT_VERSION;



    Route::name( VersionUrl )->group(
        function()
        {

        }
    );



    require_once 'homeApi.php';
?>