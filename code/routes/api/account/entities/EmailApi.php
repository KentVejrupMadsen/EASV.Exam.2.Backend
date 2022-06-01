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
    use App\Http\Controllers\httpControllers\account\entities\PersonEmailController;

    const EmailRoute  = 'email';

    const RouteRead   = 'read';
    const RouteCreate = 'create';
    const RouteUpdate = 'update';
    const RouteDelete = 'delete';


    function EmailApi(): void
    {
        Route::prefix( EmailRoute )->group
        (
            function()
            {
                Route::controller( PersonEmailController::class )->group
                (
                    function()
                    {
                        Route::get( RouteRead, 'read' );
                        Route::post( RouteCreate, 'create' );
                        Route::patch( RouteUpdate, 'update' );
                        Route::delete( RouteDelete, 'delete' );
                    }
                );
            }
        );
    }
?>