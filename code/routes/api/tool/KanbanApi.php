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


    const KanbanRoute = 'kanban';

    const KanbanCreateRoute = 'create';
    const KanbanDeleteRoute = 'delete';
    const KanbanReadRoute   = 'read';
    const KanbanUpdateRoute = 'update';


    function KanbanApi(): void
    {
        Route::prefix( KanbanRoute )->group
        (
            function(): void
            {
                Route::controller( KanbanController::class )->group
                (
                    function(): void
                    {
                        Route::post( KanbanCreateRoute, 'create' );
                        Route::delete( KanbanDeleteRoute, 'delete' );
                        Route::get( KanbanReadRoute, 'read' );
                        Route::patch( KanbanUpdateRoute, 'update' );
                    }
                );
            }
        );
    }
?>