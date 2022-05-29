<?php
    /**
     * Author: Kent vejrup Madsen
     * Description: ?
     * TODO: make a description
     */

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\http\additional\SecurityRecaptchaController;


    //
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