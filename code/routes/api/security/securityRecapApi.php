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


    // Routes
    Route::get(
        recaptchaReadRoute,
        [ SecurityRecaptchaController::class, 'publicRead' ]
    );

        // Create
    Route::post(
        recaptchaCreateRoute,
        [ SecurityRecaptchaController::class, 'publicCreate' ]
    );

        // Update
    Route::patch(
        recaptchaUpdateRoute,
        [ SecurityRecaptchaController::class, 'publicUpdate' ]
    );

        // Delete
    Route::delete(
        recaptchaDeleteRoute,
        [ SecurityRecaptchaController::class, 'publicDelete' ]
    );

?>