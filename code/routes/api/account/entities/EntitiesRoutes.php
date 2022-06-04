<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    // External library
    use Illuminate\Support\Facades\Route;

    // Internally
    require_once 'AddressApi.php';
    require_once 'EmailApi.php';
    require_once 'NameApi.php';


    const EntityRoute = 'entities';

    function EntitiesRoutes()
    {
        Route::prefix( EntityRoute )->group
        (
            function()
            {
                MakeAddressApi();
                MakeEmailApi();
                NameApi();
            }
        );
    }
?>