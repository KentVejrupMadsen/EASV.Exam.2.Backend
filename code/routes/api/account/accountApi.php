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
    const account_route = 'account';

    const account_login_route   = '/login';
    const account_verify_route  =  '/verify';
    const account_create_route  =  '/create';
    const account_me_route      =  '/me';
    const account_logout_route  =  '/logout';
    const account_update_route  =  '/update';
    const account_delete_route  =  '/delete';


    function AccountApi()
    {
        Route::prefix( account_route )->group
        (
            function()
            {
                Route::controller( AccountController::class )->group
                (
                    function()
                    {
                        Route::post( account_login_route, 'login' );
                        Route::post( account_verify_route, 'verify' );
                        Route::post( account_create_route, 'create' );

                        Route::middleware( MIDSANC )->group
                        (
                            function()
                            {
                                Route::get( account_me_route,'me' );
                                Route::get( account_logout_route, 'logout' );
                                Route::patch( account_update_route, 'update' );
                                Route::delete( account_delete_route, 'delete' );
                            }
                        );
                    }
                );
            }
        );
    }
?>