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
    use App\Http\Controllers\httpControllers\tools\BoardController;
    use App\Http\Controllers\RouteController;


    const BoardRoute       = 'board';

    const BoardCreateRoute = 'create';
    const BoardDeleteRoute = 'delete';
    const BoardReadRoute   = 'read';
    const BoardUpdateRoute = 'update';


    function MakeBoardApi(): void
    {
        Route::prefix( BoardRoute )->group
        (
            function(): void
            {
                Route::controller( BoardController::class )->group
                (
                    function(): void
                    {
                        Route::post( BoardCreateRoute, 'create' );
                        Route::delete( BoardDeleteRoute, 'delete' );
                        Route::get( BoardReadRoute, 'read' );
                        Route::patch( BoardUpdateRoute, 'update' );
                    }
                );
            }
        );
    }
?>