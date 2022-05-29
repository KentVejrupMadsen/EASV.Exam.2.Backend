<?php
    /**
     * Author: Kent vejrup Madsen
     * Description: ?
     * TODO: make a description
     */
    $mw_sanctum =  'auth:sanctum';

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\http\tools\TaskController;


    Route::get(
        '/1.0.0/tool/task/read',
        [ TaskController::class, 'read' ]
    );

    // Create
    Route::post(
        '/1.0.0/tool/task/create',
        [ TaskController::class, 'create' ]
    );

    // Update
    Route::patch(
        '/1.0.0/tool/task/update',
        [ TaskController::class, 'update' ]
    );

    // Delete
    Route::delete(
        '/1.0.0/tool/task/delete',
        [ TaskController::class, 'delete' ]
    );
?>