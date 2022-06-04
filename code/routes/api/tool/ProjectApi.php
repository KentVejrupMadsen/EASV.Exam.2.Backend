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
    use App\Http\Controllers\RouteController;

    const projectRoute = 'project';

    const projectCreateRoute = 'create';
    const projectDeleteRoute = 'delete';
    const projectReadRoute   = 'read';
    const projectUpdateRoute = 'update';


    function MakeProjectApi(): void
    {
        Route::prefix( projectRoute )->group
        (
            function(): void
            {
                Route::controller( ProjectController::class )->group
                (
                    function(): void
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