<?php
    /**
     * Author: Kent vejrup Madsen
     * Description: ?
     * TODO: make a description
     */

    use App\Http\Controllers\http\security\SecurityCSRFTokenController;
    use Illuminate\Support\Facades\Route;


    //
    Route::post(
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

    Route::get(
        '/1.0.0/security/csrf/read',
        [ SecurityCSRFTokenController::class, 'read' ]
    );

    Route::patch(
        '/1.0.0/security/csrf/update',
        [ SecurityCSRFTokenController::class, 'update' ]
    );

    Route::delete(
        '/1.0.0/security/csrf/delete',
        [ SecurityCSRFTokenController::class, 'delete' ]
    );
?>