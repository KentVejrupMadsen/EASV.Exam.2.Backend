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


    function StateApi(): void
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