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
    use App\Http\Controllers\httpControllers\tools\BoardController;

    // Routes
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