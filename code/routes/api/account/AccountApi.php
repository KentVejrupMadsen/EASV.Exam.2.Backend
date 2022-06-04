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
    use App\Http\Controllers\RouteController;


    class AccountApi
        extends RouteController
    {
        private const route = 'account';

        private const create_route  =  'create';
        private const delete_route  =  'delete';

        private const me_route      =  'me';
        private const login_route   =  'login';
        private const logout_route  =  'logout';
        private const update_route  =  'update';
        private const verify_route  =  'verify';
        private const read_route    =  'read';


        private function make()
        {
            Route::prefix( self::route )->group
            (
                function(): void
                {
                    Route::controller( AccountController::class )->group
                    (
                        function(): void
                        {
                            Route::post( self::create_route, 'create' );
                            Route::post( self::login_route, 'login' );
                            Route::get( self::read_route, 'read' );
                            Route::delete( self::delete_route, 'public_delete' );
                            Route::get( self::logout_route, 'logout' );
                            Route::get( self::me_route, 'me' );
                            Route::patch( self::update_route, 'public_update' );
                            Route::post( self::verify_route, 'verify' );
                        }
                    );
                }
            );
        }

        public final function execute()
        {
            $this->make();
        }
    }


?>