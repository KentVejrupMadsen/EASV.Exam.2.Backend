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

    
    // Routes
    Route::get(
        configurationReadRoute,
        [ SecurityConfigurationController::class, 'publicRead' ]
    );

    // Create
    Route::post(
        configurationCreateRoute,
        [ SecurityConfigurationController::class, 'publicCreate' ]
    );

    // Update
    Route::patch(
        configurationUpdateRoute,
        [ SecurityConfigurationController::class, 'publicUpdate' ]
    );

    // Delete
    Route::delete(
        configurationDeleteRoute,
        [ SecurityConfigurationController::class, 'publicDelete' ]
    );
?>