<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    require_once 'SecurityCSRFApi.php';
    require_once 'SecurityConfigurationApi.php';
    require_once 'SecurityRecapApi.php';

    use Illuminate\Support\Facades\Route;

    const SecurityRoute = 'securities';


    function SecurityRoutes(): void
    {
        Route::prefix( SecurityRoute )->group
        (
            function(): void
            {
                MakeSecurityCSRFApi();
                MakeSecurityConfigurationApi();
                MakeSecurityRecapApi();
            }
        );
    }
?>