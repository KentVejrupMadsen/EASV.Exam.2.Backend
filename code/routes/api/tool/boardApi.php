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


    // Routes
    Route::get(
        boardReadRoute,
        [ BoardController::class, 'read' ]
    );

    // Create
    Route::post(
        boardCreateRoute,
        [ BoardController::class, 'create' ]
    );

    // Update
    Route::patch(
        boardUpdateRoute,
        [ BoardController::class, 'update' ]
    );

    // Delete
    Route::delete(
        boardDeleteRoute,
        [ BoardController::class, 'delete' ]
    );
?>