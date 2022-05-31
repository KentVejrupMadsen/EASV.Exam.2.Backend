<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    // Internal libraries
    use App\Http\Controllers\httpControllers\account\AccountController;

    // External libraries
    use Illuminate\Support\Facades\Route;


    const account_route = '/' . CURRENT_VERSION . '/account';

    const account_login_route   = account_route . '/login';
    const account_verify_route  = account_route . '/verify';
    const account_create_route  = account_route . '/create';
    const account_me_route      = account_route . '/me';
    const account_logout_route  = account_route . '/logout';
    const account_update_route  = account_route . '/update';
    const account_delete_route  = account_route . '/delete';

    // Routes
    Route::post(
        account_login_route,
        [ AccountController::class, 'login' ]
    );

    Route::post(
        account_verify_route,
        [ AccountController::class, 'verify' ]
    );

        // Register / Create
    Route::post(
        account_create_route,
        [ AccountController::class, 'create' ]
    );

        // Whoami
    Route::middleware( MIDSANC )->get(
        account_me_route,
        [ AccountController::class, 'me' ]
    );

        // Logout
    Route::middleware( MIDSANC )->get(
        account_logout_route,
        [ AccountController::class, 'logout' ]
    );

        // Update
    Route::middleware( MIDSANC )->patch(
        account_update_route,
        [ AccountController::class, 'update' ]
    );

        // Delete
    Route::middleware( MIDSANC )->delete(
        account_delete_route,
        [ AccountController::class, 'delete' ]
    );
?>