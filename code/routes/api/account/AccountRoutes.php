<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    // External libraries
    use Illuminate\Support\Facades\Route;

    require_once 'entities/EntitiesRoutes.php';

    require_once 'AccountApi.php';
    require_once 'NewsletterApi.php';


    function AccountRoutes(): void
    {
        Route::prefix( 'accounts' )->group
        (
            function()
            {
                AccountApi();
                NewsletterApi();
                EntitiesRoutes();
            }
        );

    }
?>