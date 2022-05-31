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

    const entityEmailRoute = '/' . CURRENT_VERSION . '/account/entities/email';
    const EntityEmailRead = entityEmailRoute . '/read';
    const EntityEmailCreate = entityEmailRoute . '/create';
    const EntityEmailUpdate = entityEmailRoute . '/update';
    const EntityEmailDelete = entityEmailRoute . '/delete';


    // Routes
    Route::get(
        EntityEmailRead,
        [ PersonEmailController::class, 'read' ]
    );

    // Create
    Route::post(
        EntityEmailCreate,
        [ PersonEmailController::class, 'create' ]
    );

    // Update
    Route::patch(
        EntityEmailUpdate,
        [ PersonEmailController::class, 'update' ]
    );

    // Delete
    Route::delete(
        EntityEmailDelete,
        [ PersonEmailController::class, 'delete' ]
    );
?>