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
    use App\Http\Controllers\httpControllers\account\entities\PersonEmailController;


    // Routes
    Route::get(
        '/1.0.0/account/entities/email/read',
        [ PersonEmailController::class, 'read' ]
    );

    // Create
    Route::post(
        '/1.0.0/account/entities/email/create',
        [ PersonEmailController::class, 'create' ]
    );

    // Update
    Route::patch(
        '/1.0.0/account/entities/email/update',
        [ PersonEmailController::class, 'update' ]
    );

    // Delete
    Route::delete(
        '/1.0.0/account/entities/email/delete',
        [ PersonEmailController::class, 'delete' ]
    );
?>