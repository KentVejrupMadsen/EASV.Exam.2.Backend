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

    const boardRoute = '/' . CURRENT_VERSION . '/tool/board';
    const boardReadRoute = boardRoute . '/read';
    const boardCreateRoute = boardRoute . '/create';
    const boardUpdateRoute = boardRoute . '/update';
    const boardDeleteRoute = boardRoute . '/delete';

    
    // Routes
    Route::get(
        '/1.0.0/tool/project/read',
        [ ProjectController::class, 'read' ]
    );

        // Create
    Route::post(
        '/1.0.0/tool/project/create',
        [ ProjectController::class, 'create' ]
    );

        // Update
    Route::patch(
        '/1.0.0/tool/project/update',
        [ ProjectController::class, 'update' ]
    );

        // Delete
    Route::delete(
        '/1.0.0/tool/project/delete',
        [ ProjectController::class, 'delete' ]
    );
?>