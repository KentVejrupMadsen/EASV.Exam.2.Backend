<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    require_once 'securityCSRFApi.php';
    require_once 'securityConfigurationApi.php';
    require_once 'securityRecapApi.php';

    use Illuminate\Support\Facades\Route;

    function SecurityRoutes(): void
    {
        Route::prefix( 'securities' )->group
        (
            function()
            {
                securityCSRFApi();
                securityConfigurationApi();
                securityRecapApi();
            }
        );
    }
?>