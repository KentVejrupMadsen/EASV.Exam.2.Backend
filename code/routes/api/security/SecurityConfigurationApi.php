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


    const ConfigurationRoute = 'configuration';

    const ConfigurationCreateRoute = 'create';
    const ConfigurationDeleteRoute = 'delete';
    const ConfigurationReadRoute   = 'read';
    const ConfigurationUpdateRoute = 'update';


    function SecurityConfigurationApi(): void
    {
        Route::prefix( ConfigurationRoute )->group
        (
            function(): void
            {
                Route::controller( SecurityConfigurationController::class )->group
                (
                    function(): void
                    {
                        Route::post( ConfigurationCreateRoute, 'publicCreate' );
                        Route::delete( ConfigurationDeleteRoute, 'publicDelete' );
                        Route::post( ConfigurationReadRoute, 'publicRead' );
                        Route::patch( ConfigurationUpdateRoute, 'publicUpdate' );
                    }
                );
            }
        );
    }
?>