<?php
    /**
     * Author: Kent vejrup Madsen
     * Description: ?
     * TODO: make a description
     */
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\CSRFTokenController;


    Route::get(
        '/1.0.0/security/csrf/create',
        [ CSRFTokenController::class, 'create' ]
    );

    Route::post(
        '/1.0.0/security/csrf/access',
        [ CSRFTokenController::class, 'access' ]
    );

    Route::get(
        '/1.0.0/security/csrf/reset',
        [ CSRFTokenController::class, 'reset' ]
    );
?>