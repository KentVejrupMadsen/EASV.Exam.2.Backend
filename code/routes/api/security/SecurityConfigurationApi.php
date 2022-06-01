<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */

    // External libraries
    use Illuminate\Support\Facades\Route;

    // Internal libraries
    use App\Http\Controllers\httpControllers\security\SecurityConfigurationController;


    const configurationRoute = 'configuration';

    const configurationCreateRoute = 'create';
    const configurationDeleteRoute = 'delete';
    const configurationReadRoute   = 'read';
    const configurationUpdateRoute = 'update';


    function securityConfigurationApi(): void
    {
        Route::prefix( configurationRoute )->group
        (
            function()
            {
                Route::controller( SecurityConfigurationController::class )->group
                (
                    function ()
                    {
                        Route::post( configurationCreateRoute, 'publicCreate' );
                        Route::delete( configurationDeleteRoute, 'publicDelete' );
                        Route::post( configurationReadRoute, 'publicRead' );
                        Route::patch( configurationUpdateRoute, 'publicUpdate' );
                    }
                );
            }
        );
    }
?>