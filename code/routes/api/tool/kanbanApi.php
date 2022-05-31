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

    const kanbanCreateRoute = 'create';
    const kanbanDeleteRoute = 'delete';
    const kanbanReadRoute   = 'read';
    const kanbanUpdateRoute = 'update';


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
                        Route::post( kanbanCreateRoute, 'create' );
                        Route::delete( kanbanDeleteRoute, 'delete' );
                        Route::patch( kanbanUpdateRoute, 'update' );
                        Route::get( kanbanReadRoute, 'read' );
                    }
                );
            }
        );
    }
?>