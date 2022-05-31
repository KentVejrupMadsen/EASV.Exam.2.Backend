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
    use App\Http\Controllers\httpControllers\tools\ProjectController;

    const projectRoute = '/' . CURRENT_VERSION . '/tool/project';

    const projectReadRoute = projectRoute . '/read';
    const projectCreateRoute = projectRoute . '/create';
    const projectUpdateRoute = projectRoute . '/update';
    const projectDeleteRoute = projectRoute . '/delete';


    // Routes
    Route::get(
        projectReadRoute,
        [ ProjectController::class, 'read' ]
    );

        // Create
    Route::post(
        projectCreateRoute,
        [ ProjectController::class, 'create' ]
    );

        // Update
    Route::patch(
        projectUpdateRoute,
        [ ProjectController::class, 'update' ]
    );

        // Delete
    Route::delete(
        projectDeleteRoute,
        [ ProjectController::class, 'delete' ]
    );
?>