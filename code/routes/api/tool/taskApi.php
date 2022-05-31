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


    // Routes
    Route::get(
        taskReadRoute,
        [ TaskController::class, 'read' ]
    );

    // Create
    Route::post(
        taskCreateRoute,
        [ TaskController::class, 'create' ]
    );

    // Update
    Route::patch(
        taskUpdateRoute,
        [ TaskController::class, 'update' ]
    );

    // Delete
    Route::delete(
        taskDeleteRoute,
        [ TaskController::class, 'delete' ]
    );
?>