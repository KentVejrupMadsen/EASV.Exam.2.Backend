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

    const EmailRouteRead   = 'read';
    const EmailRouteCreate = 'create';
    const EmailRouteUpdate = 'update';
    const EmailRouteDelete = 'delete';


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
                        Route::get( EmailRouteRead, 'read' );
                        Route::post( EmailRouteCreate, 'create' );
                        Route::patch( EmailRouteUpdate, 'update' );
                        Route::delete( EmailRouteDelete, 'delete' );
                    }
                );
            }
        );
    }
?>