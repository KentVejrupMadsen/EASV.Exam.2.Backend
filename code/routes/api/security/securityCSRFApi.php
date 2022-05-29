<?php
    /**
     * Author: Kent vejrup Madsen
     * Description: ?
     * TODO: make a description
     */

    use App\Http\Controllers\http\additional\SecurityCSRFTokenController;
    use Illuminate\Support\Facades\Route;


    Route::get(
        '/1.0.0/security/csrf/create',
        [ SecurityCSRFTokenController::class, 'create' ]
    );

    Route::post(
        '/1.0.0/security/csrf/access',
        [ SecurityCSRFTokenController::class, 'access' ]
    );

    Route::get(
        '/1.0.0/security/csrf/reset',
        [ SecurityCSRFTokenController::class, 'reset' ]
    );
?>