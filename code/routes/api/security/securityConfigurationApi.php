<?php
    /**
     * Author: Kent vejrup Madsen
     * Description: ?
     * TODO: make a description
     */

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\http\security\SecurityConfigurationController;


    Route::get(
        '/1.0.0/security/configuration/read',
        [ SecurityConfigurationController::class, 'read' ]
    );

    // Create
    Route::post(
        '/1.0.0/security/configuration/create',
        [ SecurityConfigurationController::class, 'create' ]
    );

    // Update
    Route::patch(
        '/1.0.0/security/configuration/update',
        [ SecurityConfigurationController::class, 'update' ]
    );

    // Delete
    Route::delete(
        '/1.0.0/security/configuration/delete',
        [ SecurityConfigurationController::class, 'delete' ]
    );
?>