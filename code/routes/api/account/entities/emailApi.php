<?php
/**
 * Author: Kent vejrup Madsen
 * Description:
 * TODO: Make description
 */
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\http\account\entities\PersonEmailController;


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