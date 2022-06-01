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


    const RecaptchaRoute = 'recaptcha';

    const RecaptchaCreateRoute =  'create';
    const RecaptchaDeleteRoute =  'delete';
    const RecaptchaReadRoute   =  'read';
    const RecaptchaUpdateRoute =  'update';


    function SecurityRecapApi(): void
    {
        Route::prefix( RecaptchaRoute )->group
        (
            function(): void
            {
                Route::controller( SecurityRecaptchaController::class )->group
                (
                    function(): void
                    {
                        Route::post( RecaptchaCreateRoute, 'publicCreate' );
                        Route::delete( RecaptchaDeleteRoute, 'publicDelete' );
                        Route::get( RecaptchaReadRoute, 'publicRead' );
                        Route::patch( RecaptchaUpdateRoute, 'publicUpdate' );
                    }
                );
            }
        );
    }
?>