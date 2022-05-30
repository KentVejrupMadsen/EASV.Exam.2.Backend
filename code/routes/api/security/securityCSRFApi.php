<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    // Internal libraries
    use App\Http\Controllers\httpControllers\security\SecurityCSRFTokenController;

    // External libraries
    use Illuminate\Support\Facades\Route;


    //  Rotes
    Route::post(
        '/1.0.0/security/csrf/create',
        [ SecurityCSRFTokenController::class, 'publicCreate' ]
    );

    Route::post(
        '/1.0.0/security/csrf/access',
        [ SecurityCSRFTokenController::class, 'access' ]
    );

    Route::get(
        '/1.0.0/security/csrf/reset',
        [ SecurityCSRFTokenController::class, 'reset' ]
    );

    Route::get(
        '/1.0.0/security/csrf/read',
        [ SecurityCSRFTokenController::class, 'publicRead' ]
    );

    Route::patch(
        '/1.0.0/security/csrf/update',
        [ SecurityCSRFTokenController::class, 'publicUpdate' ]
    );

    Route::delete(
        '/1.0.0/security/csrf/delete',
        [ SecurityCSRFTokenController::class, 'publicDelete' ]
    );
?>