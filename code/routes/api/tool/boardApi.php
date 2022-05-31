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


    const boardRoute = '/' . CURRENT_VERSION . '/tool/board';
    const boardReadRoute = boardRoute . '/read';
    const boardCreateRoute = boardRoute . '/create';
    const boardUpdateRoute = boardRoute . '/update';
    const boardDeleteRoute = boardRoute . '/delete';


    function BoardApi(): void
    {
        Route::controller( BoardController::class )->group
        (
            function()
            {
                Route::get( boardReadRoute, 'read' );
                Route::post(boardCreateRoute, 'create' );
                Route::patch(boardUpdateRoute, 'update' );
                Route::delete( boardDeleteRoute, 'delete' );
            }
        );
    }
?>