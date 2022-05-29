<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\http\account\entities\PersonAddressController;

    
    Route::get(
        '/1.0.0/account/entities/address/read',
        [ PersonAddressController::class, 'read' ]
    );

    // Create
    Route::post(
        '/1.0.0/account/entities/address/create',
        [ PersonAddressController::class, 'create' ]
    );

    // Update
    Route::patch(
        '/1.0.0/account/entities/address/update',
        [ PersonAddressController::class, 'update' ]
    );

    // Delete
    Route::delete(
        '/1.0.0/account/entities/address/delete',
        [ PersonAddressController::class, 'delete' ]
    );
?>