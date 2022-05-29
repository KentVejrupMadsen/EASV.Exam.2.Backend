<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    $mw_sanctum =  'auth:sanctum';

    // External libraries
    use Illuminate\Support\Facades\Route;

    // Internal libraries
    use App\Http\Controllers\http\tools\ProjectController;


    // Routes
    Route::get(
        '/1.0.0/tool/project/read',
        [ ProjectController::class, 'read' ]
    );

        // Create
    Route::post(
        '/1.0.0/tool/project/create',
        [ ProjectController::class, 'create' ]
    );

        // Update
    Route::patch(
        '/1.0.0/tool/project/update',
        [ ProjectController::class, 'update' ]
    );

        // Delete
    Route::delete(
        '/1.0.0/tool/project/delete',
        [ ProjectController::class, 'delete' ]
    );
?>