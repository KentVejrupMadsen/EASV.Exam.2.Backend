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


    const configurationRoute = '/' . CURRENT_VERSION . '/security/configuration';
    const configurationReadRoute   = configurationRoute . '/read';
    const configurationCreateRoute = configurationRoute . '/create';
    const configurationUpdateRoute = configurationRoute . '/update';
    const configurationDeleteRoute = configurationRoute . '/delete';


    Route::controller(SecurityConfigurationController::class)->group(
        function ()
        {
            Route::get( configurationReadRoute, 'publicRead' );
            Route::post(configurationCreateRoute, 'publicCreate' );
            Route::patch( configurationUpdateRoute, 'publicUpdate' );
            Route::delete( configurationDeleteRoute, 'publicDelete' );
        }
    );
?>