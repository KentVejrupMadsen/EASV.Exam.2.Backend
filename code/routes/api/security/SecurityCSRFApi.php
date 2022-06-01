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
    use App\Http\Controllers\httpControllers\security\SecurityCSRFTokenController;


    const csrfRoute = 'csrf';

    const CSRFAccessRoute = 'access';
    const CSRFCreateRoute = 'create';
    const CSRFDeleteRoute = 'delete';
    const CSRFReadRoute   = 'read';
    const CSRFResetRoute  = 'reset';
    const CSRFUpdateRoute = 'update';


    function SecurityCSRFApi(): void
    {
        Route::prefix( csrfRoute )->group
        (
            function(): void
            {
                Route::controller( SecurityCSRFTokenController::class )->group
                (
                    function(): void
                    {
                        Route::post( CSRFAccessRoute, 'access' );
                        Route::get( CSRFCreateRoute, 'publicCreate' );
                        Route::delete( CSRFDeleteRoute, 'publicDelete' );
                        Route::get( CSRFReadRoute,'publicRead' );
                        Route::patch( CSRFResetRoute, 'reset' );
                        Route::patch( CSRFUpdateRoute, 'publicUpdate' );
                    }
                );
            }
        );
    }
?>