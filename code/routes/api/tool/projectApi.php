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


    Route::controller( ProjectController::class )->group
    (
        function()
        {
            Route::get( projectReadRoute, 'read' );
            Route::post( projectCreateRoute, 'create' );
            Route::patch( projectUpdateRoute, 'update' );
            Route::delete( projectDeleteRoute, 'delete' );
        }
    );
?>