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


    Route::controller( KanbanController::class )->group
    (
        function()
        {
            Route::get(kanbanReadRoute, 'read' );
            Route::post(kanbanCreateRoute, 'create');
            Route::patch(kanbanUpdateRoute, 'update' );
            Route::delete(kanbanDeleteRoute, 'delete' );
        }
    );
?>