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


    const taskRoute = '/' . CURRENT_VERSION . '/tool/task';
    const taskReadRoute = taskRoute . '/read';
    const taskCreateRoute = taskRoute . '/create';
    const taskUpdateRoute = taskRoute . '/update';
    const taskDeleteRoute = taskRoute . '/delete';


    function TaskApi(): void
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
?>