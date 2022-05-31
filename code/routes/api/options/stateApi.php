<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\httpControllers\options\StateController;

    const stateRoute = '/' . CURRENT_VERSION . '/state';


    Route::controller( StateController::class )->group
    (
        function()
        {
            Route::post( stateRoute, 'publicState' );
        }
    );
?>