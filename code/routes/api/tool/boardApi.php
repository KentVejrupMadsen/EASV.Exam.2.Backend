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

    const boardCreateRoute = 'create';
    const boardDeleteRoute = 'delete';
    const boardReadRoute   = 'read';
    const boardUpdateRoute = 'update';


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
                        Route::post( boardCreateRoute, 'create' );
                        Route::delete( boardDeleteRoute, 'delete' );
                        Route::patch( boardUpdateRoute, 'update' );
                        Route::get( boardReadRoute, 'read' );
                    }
                );
            }
        );
    }
?>