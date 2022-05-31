<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\httpControllers\options\StateController;

    const stateRoute = 'state';


    function stateApi(): void
    {
        Route::prefix( stateRoute )->group
        (
            function()
            {
                Route::controller( StateController::class )->group
                (
                    function()
                    {
                        Route::post( 'email', 'publicState' );
                    }
                );
            }
        );
    }
?>