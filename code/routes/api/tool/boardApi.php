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


    const boardRoute       = 'board';

    const boardReadRoute   = 'read';
    const boardCreateRoute = 'create';
    const boardUpdateRoute = 'update';
    const boardDeleteRoute = 'delete';


    function BoardApi(): void
    {
        Route::prefix( boardRoute )->group
        (
            function()
            {
                Route::controller( BoardController::class )->group
                (
                    function()
                    {
                        Route::get( boardReadRoute, 'read' );
                        Route::post( boardCreateRoute, 'create' );
                        Route::patch( boardUpdateRoute, 'update' );
                        Route::delete( boardDeleteRoute, 'delete' );
                    }
                );
            }
        );
    }
?>