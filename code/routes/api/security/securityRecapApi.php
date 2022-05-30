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


    // Routes
    Route::get(
        '/1.0.0/security/recaptcha/read',
        [ SecurityRecaptchaController::class, 'publicRead' ]
    );

        // Create
    Route::post(
        '/1.0.0/security/recaptcha/create',
        [ SecurityRecaptchaController::class, 'publicCreate' ]
    );

        // Update
    Route::patch(
        '/1.0.0/security/recaptcha/update',
        [ SecurityRecaptchaController::class, 'publicUpdate' ]
    );

        // Delete
    Route::delete(
        '/1.0.0/security/recaptcha/delete',
        [ SecurityRecaptchaController::class, 'publicDelete' ]
    );

?>