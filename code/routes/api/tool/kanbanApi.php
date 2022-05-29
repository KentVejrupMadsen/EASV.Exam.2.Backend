<?php
    /**
     * Author: Kent vejrup Madsen
     * Description: ?
     * TODO: make a description
     */
    $mw_sanctum =  'auth:sanctum';

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\http\tools\KanbanController;


    Route::get(
        '/1.0.0/tool/kanban/read',
        [ KanbanController::class, 'read' ]
    );

    // Create
    Route::post(
        '/1.0.0/tool/kanban/create',
        [ KanbanController::class, 'create' ]
    );

    // Update
    Route::patch(
        '/1.0.0/tool/kanban/update',
        [ KanbanController::class, 'update' ]
    );

    // Delete
    Route::delete(
        '/1.0.0/tool/kanban/delete',
        [ KanbanController::class, 'delete' ]
    );
?>