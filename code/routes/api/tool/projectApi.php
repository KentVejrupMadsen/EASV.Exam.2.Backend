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

    const projectRoute = 'project';

    const projectCreateRoute = 'create';
    const projectDeleteRoute = 'delete';
    const projectReadRoute   = 'read';
    const projectUpdateRoute = 'update';


    function ProjectApi(): void
    {
        Route::prefix( projectRoute )->group
        (
            function()
            {
                Route::controller( ProjectController::class )->group
                (
                    function()
                    {
                        Route::post( projectCreateRoute, 'create' );
                        Route::delete( projectDeleteRoute, 'delete' );
                        Route::get( projectReadRoute, 'read' );
                        Route::patch( projectUpdateRoute, 'update' );
                    }
                );
            }
        );
    }
?>