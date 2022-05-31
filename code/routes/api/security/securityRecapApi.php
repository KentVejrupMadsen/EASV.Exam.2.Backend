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

    const recaptchaCreateRoute =  'create';
    const recaptchaDeleteRoute =  'delete';
    const recaptchaReadRoute   =  'read';
    const recaptchaUpdateRoute =  'update';


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
                        Route::post( recaptchaCreateRoute, 'publicCreate' );
                        Route::delete( recaptchaDeleteRoute, 'publicDelete' );
                        Route::get( recaptchaReadRoute, 'publicRead' );
                        Route::patch( recaptchaUpdateRoute, 'publicUpdate' );
                    }
                );
            }
        );
    }
?>