<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\http\account\entities\PersonNameController;


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