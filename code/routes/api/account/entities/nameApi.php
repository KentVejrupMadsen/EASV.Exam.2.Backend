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

    const entityNameRoute = '/' . CURRENT_VERSION . '/account/entities/name';
    const entityNameReadRoute = entityNameRoute . '/read';
    const entityNameCreateRoute = entityNameRoute . '/create';
    const entityNameUpdateRoute = entityNameRoute . '/update';
    const entityNameDeleteRoute = entityNameRoute . '/delete';

    // Routes
    Route::get(
        entityNameReadRoute,
        [ PersonNameController::class, 'read' ]
    );

    // Create
    Route::post(
        entityNameCreateRoute,
        [ PersonNameController::class, 'create' ]
    );

    // Update
    Route::patch(
        entityNameUpdateRoute,
        [ PersonNameController::class, 'update' ]
    );

    // Delete
    Route::delete(
        entityNameDeleteRoute,
        [ PersonNameController::class, 'delete' ]
    );
?>