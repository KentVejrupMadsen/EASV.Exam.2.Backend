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
    use App\Http\Controllers\http\security\SecurityRecaptchaController;


    // Routes
    Route::get(
        '/1.0.0/security/recaptcha/read',
        [ SecurityRecaptchaController::class, 'read' ]
    );

        // Create
    Route::post(
        '/1.0.0/security/recaptcha/create',
        [ SecurityRecaptchaController::class, 'create' ]
    );

        // Update
    Route::patch(
        '/1.0.0/security/recaptcha/update',
        [ SecurityRecaptchaController::class, 'update' ]
    );

        // Delete
    Route::delete(
        '/1.0.0/security/recaptcha/delete',
        [ SecurityRecaptchaController::class, 'delete' ]
    );

?>