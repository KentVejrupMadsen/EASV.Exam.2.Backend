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


    const kanbanRoute = 'kanban';

    const kanbanReadRoute = 'read';
    const kanbanCreateRoute = 'create';
    const kanbanUpdateRoute = 'update';
    const kanbanDeleteRoute = 'delete';

    function KanbanApi(): void
    {
        Route::prefix( kanbanRoute )->group
        (
            function()
            {
                Route::controller( KanbanController::class )->group
                (
                    function()
                    {
                        Route::get( kanbanReadRoute, 'read' );
                        Route::post( kanbanCreateRoute, 'create' );
                        Route::patch( kanbanUpdateRoute, 'update' );
                        Route::delete( kanbanDeleteRoute, 'delete' );
                    }
                );
            }
        );
    }
?>