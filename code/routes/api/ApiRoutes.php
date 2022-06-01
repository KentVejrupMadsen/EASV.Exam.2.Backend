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
    require_once 'account/AccountRoutes.php';
    require_once 'HomeApi.php';

    require_once 'options/OptionsRoutes.php';
    require_once 'tool/ToolRoutes.php';

    require_once 'security/SecurityRoutes.php';
    require_once 'status/StatusRoutes.php';


    const CURRENT_VERSION = '1.0.0';
    const VersionUrl = '/' . CURRENT_VERSION;


    function ApiRoutes()
    {
        Route::prefix( VersionUrl )->group
        (
            function()
            {
                AccountRoutes();
                HomeApi();

                OptionsRoutes();

                SecurityRoutes();
                StatusRoutes();

                ToolRoutes();
            }
        );
    }

    ApiRoutes();
?>