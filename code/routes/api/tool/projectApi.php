<?php
    /**
     * Author: Kent vejrup Madsen
     * Description: ?
     * TODO: make a description
     */
    $mw_sanctum =  'auth:sanctum';

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\http\tools\ProjectController;


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