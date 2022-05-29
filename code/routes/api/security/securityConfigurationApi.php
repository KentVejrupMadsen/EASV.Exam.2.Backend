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
    use App\Http\Controllers\http\security\SecurityConfigurationController;


    // Routes
    Route::get(
        '/1.0.0/security/configuration/read',
        [ SecurityConfigurationController::class, 'publicRead' ]
    );

    // Create
    Route::post(
        '/1.0.0/security/configuration/create',
        [ SecurityConfigurationController::class, 'publicCreate' ]
    );

    // Update
    Route::patch(
        '/1.0.0/security/configuration/update',
        [ SecurityConfigurationController::class, 'publicUpdate' ]
    );

    // Delete
    Route::delete(
        '/1.0.0/security/configuration/delete',
        [ SecurityConfigurationController::class, 'publicDelete' ]
    );
?>