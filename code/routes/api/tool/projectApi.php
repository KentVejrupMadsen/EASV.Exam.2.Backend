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

    const projectReadRoute = 'read';
    const projectCreateRoute = 'create';
    const projectUpdateRoute = 'update';
    const projectDeleteRoute = 'delete';


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
                        Route::get( projectReadRoute, 'read' );
                        Route::post( projectCreateRoute, 'create' );
                        Route::patch( projectUpdateRoute, 'update' );
                        Route::delete( projectDeleteRoute, 'delete' );
                    }
                );
            }
        );
    }
?>