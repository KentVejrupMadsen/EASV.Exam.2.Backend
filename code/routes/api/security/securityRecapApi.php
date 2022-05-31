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

    const recaptchaRoute = '/' . CURRENT_VERSION . '/security/recaptcha';

    const recaptchaReadRoute = recaptchaRoute . '/read';
    const recaptchaCreateRoute = recaptchaRoute . '/create';
    const recaptchaUpdateRoute = recaptchaRoute . '/update';
    const recaptchaDeleteRoute = recaptchaRoute . '/delete';


    Route::controller( SecurityRecaptchaController::class )->group
    (
        function()
        {
            Route::get(recaptchaReadRoute, 'publicRead' );
            Route::post(recaptchaCreateRoute, 'publicCreate');
            Route::patch(recaptchaUpdateRoute, 'publicUpdate');
            Route::delete(recaptchaDeleteRoute, 'publicDelete');
        }
    );
?>