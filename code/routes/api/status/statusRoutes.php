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


    function statusRoutes()
    {
        Route::prefix( statusRoute )->group
        (
            function()
            {
                Route::controller( HealthController::class )->group
                (
                    function()
                    {
                        Route::get('now', 'now');
                    }
                );

            }
        );
    }
?>