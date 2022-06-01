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

    const AccountCreateRoute  =  'create';
    const AccountDeleteRoute  =  'delete';

    const AccountMeRoute      =  'me';
    const AccountLoginRoute   =  'login';
    const AccountLogoutRoute  =  'logout';
    const AccountUpdateRoute  =  'update';
    const AccountVerifyRoute  =  'verify';
    const AccountReadRoute    = 'read';


    function AccountApi(): void
    {
        Route::prefix( data_route )->group
        (
            function(): void
            {
                Route::controller( AccountController::class )->group
                (
                    function(): void
                    {
                        Route::post( AccountCreateRoute, 'create' );
                        Route::post( AccountLoginRoute, 'login' );
                        Route::get( AccountReadRoute, 'read' );

                        Route::middleware( MIDSANC )->group
                        (
                            function(): void
                            {
                                Route::delete( AccountDeleteRoute, 'delete' );
                                Route::get( AccountLogoutRoute, 'logout' );
                                Route::get( AccountMeRoute, 'me' );
                                Route::patch( AccountUpdateRoute, 'update' );
                                Route::post( AccountVerifyRoute, 'verify' );
                            }
                        );
                    }
                );
            }
        );
    }
?>