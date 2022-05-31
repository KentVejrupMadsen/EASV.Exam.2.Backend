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
    const data_route = 'account';

    const create_route  =  'create';
    const delete_route  =  'delete';

    const me_route      =  'me';
    const login_route   =  'login';
    const logout_route  =  'logout';
    const update_route  =  'update';
    const verify_route  =  'verify';


    function AccountApi()
    {
        Route::prefix( data_route )->group
        (
            function()
            {
                Route::controller( AccountController::class )->group
                (
                    function()
                    {
                        Route::post( create_route, 'create' );
                        Route::post( login_route, 'login' );
                        Route::post( verify_route, 'verify' );

                        Route::middleware( MIDSANC )->group
                        (
                            function()
                            {
                                Route::delete( delete_route, 'delete' );
                                Route::get( logout_route, 'logout' );
                                Route::get( me_route, 'me' );
                                Route::patch( update_route, 'update' );
                            }
                        );
                    }
                );
            }
        );
    }
?>