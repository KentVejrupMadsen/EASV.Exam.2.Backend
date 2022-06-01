<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\httpControllers\options\FindController;

    const findRoute = 'find';


    function findApi(): void
    {
        Route::prefix( findRoute  )->group
        (
            function()
            {
                Route::controller( FindController::class )->group
                (
                    function()
                    {
                        Route::post( 'email', 'publicFind' );
                    }
                );
            }
        );
    }
?>