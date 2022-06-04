<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\httpControllers\options\StateController;
    use App\Http\Controllers\RouteController;


    const stateRoute = 'state';

    function MakeStateApi(): void
    {
        Route::prefix( stateRoute )->group
        (
            function(): void
            {
                Route::controller( StateController::class )->group
                (
                    function(): void
                    {
                        Route::post( 'email', 'publicState' );
                    }
                );
            }
        );
    }
?>