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

    function securityCSRFApi(): void
    {
        Route::controller(SecurityCSRFTokenController::class)->group
        (
            function()
            {
                Route::post(csrfCreateRoute, 'publicCreate');
                Route::post(csrfAccessRoute, 'access');
                Route::patch(csrfResetRoute, 'reset');
                Route::post(csrfReadRoute,'publicRead');
                Route::patch(csrfUpdateRoute, 'publicUpdate');
                Route::delete( csrfDeleteRoute, 'publicDelete');
            }
        );
    }
?>