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

    const login_route   = '/login';
    const verify_route  =  '/verify';
    const create_route  =  '/create';
    const me_route      =  '/me';
    const logout_route  =  '/logout';
    const update_route  =  '/update';
    const delete_route  =  '/delete';


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
                        Route::post( login_route, 'login' );
                        Route::post( verify_route, 'verify' );
                        Route::post( create_route, 'create' );

                        Route::middleware( MIDSANC )->group
                        (
                            function()
                            {
                                Route::get( me_route,'me' );
                                Route::get( logout_route, 'logout' );
                                Route::patch( update_route, 'update' );
                                Route::delete( delete_route, 'delete' );
                            }
                        );
                    }
                );
            }
        );
    }
?>