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

    const configurationReadRoute   = 'read';
    const configurationCreateRoute = 'create';
    const configurationUpdateRoute = 'update';
    const configurationDeleteRoute = 'delete';


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
                        Route::get( configurationReadRoute, 'publicRead' );
                        Route::post( configurationCreateRoute, 'publicCreate' );
                        Route::patch( configurationUpdateRoute, 'publicUpdate' );
                        Route::delete( configurationDeleteRoute, 'publicDelete' );
                    }
                );
            }
        );
    }
?>