<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    // Internal libraries
    use App\Http\Controllers\httpControllers\security\SecurityCSRFTokenController;

    // External libraries
    use Illuminate\Support\Facades\Route;

    const csrfRoute = 'csrf';

    const csrfAccessRoute = 'access';
    const csrfCreateRoute = 'create';
    const csrfDeleteRoute = 'delete';
    const csrfReadRoute   = 'read';
    const csrfResetRoute  = 'reset';
    const csrfUpdateRoute = 'update';


    function securityCSRFApi(): void
    {
        Route::prefix( csrfRoute )->group
        (
            function()
            {
                Route::controller( SecurityCSRFTokenController::class )->group
                (
                    function()
                    {
                        Route::post( csrfAccessRoute, 'access' );
                        Route::post( csrfCreateRoute, 'publicCreate' );
                        Route::delete( csrfDeleteRoute, 'publicDelete' );
                        Route::post( csrfReadRoute,'publicRead' );
                        Route::patch( csrfResetRoute, 'reset' );
                        Route::patch( csrfUpdateRoute, 'publicUpdate' );
                    }
                );
            }
        );
    }
?>