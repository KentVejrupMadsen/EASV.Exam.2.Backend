<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;

    require_once 'FindApi.php';
    require_once 'StateApi.php';


    const options_route = 'options';

    function OptionsRoutes(): void
    {
        Route::prefix( options_route )->group
        (
            function()
            {
                findApi();
                stateApi();
            }
        );
    }
?>