<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\httpControllers\status\HealthController;

    const statusRoute = 'status';


    function StatusRoutes(): void
    {
        Route::prefix( statusRoute )->group
        (
            function(): void
            {
                Route::controller( HealthController::class )->group
                (
                    function(): void
                    {
                        Route::get( 'now', 'now' );
                    }
                );

            }
        );
    }
?>