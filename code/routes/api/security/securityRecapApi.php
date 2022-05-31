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
    use App\Http\Controllers\httpControllers\security\SecurityRecaptchaController;

    const recaptchaRoute = 'recaptcha';

    const recaptchaReadRoute   =  'read';
    const recaptchaCreateRoute =  'create';
    const recaptchaUpdateRoute =  'update';
    const recaptchaDeleteRoute =  'delete';


    function securityRecapApi(): void
    {
        Route::prefix( recaptchaRoute )->group
        (
            function()
            {
                Route::controller( SecurityRecaptchaController::class )->group
                (
                    function()
                    {
                        Route::get( recaptchaReadRoute, 'publicRead' );
                        Route::post( recaptchaCreateRoute, 'publicCreate' );
                        Route::patch( recaptchaUpdateRoute, 'publicUpdate' );
                        Route::delete( recaptchaDeleteRoute, 'publicDelete' );
                    }
                );
            }
        );
    }
?>