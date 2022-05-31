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

    const csrfCreateRoute =  'create';
    const csrfAccessRoute =  'access';
    const csrfResetRoute =  'reset';
    const csrfReadRoute =  'read';
    const csrfUpdateRoute =  'update';
    const csrfDeleteRoute = 'delete';


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
                        Route::post( csrfCreateRoute, 'publicCreate' );
                        Route::post( csrfAccessRoute, 'access' );
                        Route::patch( csrfResetRoute, 'reset' );
                        Route::post( csrfReadRoute,'publicRead' );
                        Route::patch( csrfUpdateRoute, 'publicUpdate' );
                        Route::delete( csrfDeleteRoute, 'publicDelete' );
                    }
                );
            }
        );
    }
?>