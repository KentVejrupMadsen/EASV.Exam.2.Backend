<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;

    require_once 'findApi.php';
    require_once 'stateApi.php';

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