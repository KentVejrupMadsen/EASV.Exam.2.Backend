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


    //
    const account_route = '/' . CURRENT_VERSION . '/account';

    const account_login_route   = account_route . '/login';
    const account_verify_route  = account_route . '/verify';
    const account_create_route  = account_route . '/create';
    const account_me_route      = account_route . '/me';
    const account_logout_route  = account_route . '/logout';
    const account_update_route  = account_route . '/update';
    const account_delete_route  = account_route . '/delete';


    Route::controller( AccountController::class )->group
    (
        function()
        {
            Route::post(account_login_route, 'login');
            Route::post(account_verify_route, 'verify');
            Route::post(account_create_route, 'create');
            Route::middleware( MIDSANC )->get(account_me_route,'me');
            Route::middleware( MIDSANC )->get(account_logout_route, 'logout');
            Route::middleware( MIDSANC )->patch(account_update_route, 'update');
            Route::middleware( MIDSANC )->delete(account_delete_route, 'delete');
        }
    );
?>