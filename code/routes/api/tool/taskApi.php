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
    use App\Http\Controllers\httpControllers\tools\TaskController;


    const taskRoute = 'task';

    const taskReadRoute   = 'read';
    const taskCreateRoute = 'create';
    const taskUpdateRoute = 'update';
    const taskDeleteRoute = 'delete';


    function TaskApi(): void
    {
        Route::prefix( taskRoute )->group
        (
            function()
            {
                Route::controller( TaskController::class )->group
                (
                    function()
                    {
                        Route::get( taskReadRoute, 'read' );
                        Route::post( taskCreateRoute, 'create' );
                        Route::patch( taskUpdateRoute, 'update' );
                        Route::delete( taskDeleteRoute, 'delete' );
                    }
                );
            }
        );
    }
?>