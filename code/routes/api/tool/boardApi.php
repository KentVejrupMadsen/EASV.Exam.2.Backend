<?php
    /**
     * Author: Kent vejrup Madsen
     * Description: ?
     * TODO: make a description
     */
    $mw_sanctum =  'auth:sanctum';

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\http\tools\BoardController;


    Route::get(
        '/1.0.0/tool/board/read',
        [ BoardController::class, 'read' ]
    );

    // Create
    Route::post(
        '/1.0.0/tool/board/create',
        [ BoardController::class, 'create' ]
    );

    // Update
    Route::patch(
        '/1.0.0/tool/board/update',
        [ BoardController::class, 'update' ]
    );

    // Delete
    Route::delete(
        '/1.0.0/tool/board/delete',
        [ BoardController::class, 'delete' ]
    );
?>