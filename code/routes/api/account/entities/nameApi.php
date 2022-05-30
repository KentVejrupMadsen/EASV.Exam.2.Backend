<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    // External library
    use Illuminate\Support\Facades\Route;

    // Internal library
    use App\Http\Controllers\httpControllers\account\entities\PersonNameController;


    // Routes
    Route::get(
        '/1.0.0/account/entities/name/read',
        [ PersonNameController::class, 'read' ]
    );

    // Create
    Route::post(
        '/1.0.0/account/entities/name/create',
        [ PersonNameController::class, 'create' ]
    );

    // Update
    Route::patch(
        '/1.0.0/account/entities/name/update',
        [ PersonNameController::class, 'update' ]
    );

    // Delete
    Route::delete(
        '/1.0.0/account/entities/name/delete',
        [ PersonNameController::class, 'delete' ]
    );
?>