<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\httpControllers\options\FindController;
    use App\Http\Controllers\RouteController;

    const findRoute = 'find';


    function MakeFindApi(): void
    {
        Route::prefix( findRoute  )->group
        (
            function(): void
            {
                Route::controller( FindController::class )->group
                (
                    function(): void
                    {
                        Route::post( 'email', 'publicFind' );
                    }
                );
            }
        );
    }
?>