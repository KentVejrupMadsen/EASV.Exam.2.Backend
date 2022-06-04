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
    require_once 'NewsletterApi.php';
    require_once 'AccountApi.php';


    const accounts_route = 'accounts';


    function AccountRoutes(): void
    {
        Route::prefix( accounts_route )->group
        (
            function(): void
            {
                MakeAccountApi();
                MakeNewsletterApi();
                EntitiesRoutes();
            }
        );

    }
?>