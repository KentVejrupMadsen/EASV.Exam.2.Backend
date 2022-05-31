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

    const csrfRoute = '/' . CURRENT_VERSION . '/security/csrf';
    const csrfCreateRoute = csrfRoute . '/create';
    const csrfAccessRoute = csrfRoute . '/access';
    const csrfResetRoute = csrfRoute . '/reset';
    const csrfReadRoute = csrfRoute . '/read';
    const csrfUpdateRoute = csrfRoute . '/update';
    const csrfDeleteRoute = csrfRoute . '/delete';


    //  Rotes
    Route::post(
        csrfCreateRoute,
        [ SecurityCSRFTokenController::class, 'publicCreate' ]
    );

    Route::post(
        csrfAccessRoute,
        [ SecurityCSRFTokenController::class, 'access' ]
    );

    Route::patch(
        csrfResetRoute,
        [ SecurityCSRFTokenController::class, 'reset' ]
    );

    Route::post(
        csrfReadRoute,
        [ SecurityCSRFTokenController::class, 'publicRead' ]
    );

    Route::patch(
        csrfUpdateRoute,
        [ SecurityCSRFTokenController::class, 'publicUpdate' ]
    );

    Route::delete(
        csrfDeleteRoute,
        [ SecurityCSRFTokenController::class, 'publicDelete' ]
    );
?>