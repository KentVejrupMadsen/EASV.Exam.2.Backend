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
    use App\Http\Controllers\httpControllers\tools\KanbanController;


    const kanbanRoute = '/' . CURRENT_VERSION . '/tool/kanban';

    const kanbanReadRoute = kanbanRoute . '/read';
    const kanbanCreateRoute = kanbanRoute . '/create';
    const kanbanUpdateRoute = kanbanRoute . '/update';
    const kanbanDeleteRoute = kanbanRoute . '/delete';


    // Routes
    Route::get(
        kanbanReadRoute,
        [ KanbanController::class, 'read' ]
    );

    // Create
    Route::post(
        kanbanCreateRoute,
        [ KanbanController::class, 'create' ]
    );

    // Update
    Route::patch(
        kanbanUpdateRoute,
        [ KanbanController::class, 'update' ]
    );

    // Delete
    Route::delete(
        kanbanDeleteRoute,
        [ KanbanController::class, 'delete' ]
    );
?>