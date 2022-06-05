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


    /**
     *
     */
    class AccountApi
        extends RouteController
    {
        /**
         *
         */
        public function __construct()
        {
            $this->setRoute( self::route );
        }

        // Variables
        private const route = 'account';

        private const create_route  =  ACTION_CREATE;
        private const delete_route  =  ACTION_DELETE;

        private const me_route      =  'me';
        private const login_route   =  'login';
        private const logout_route  =  'logout';
        private const update_route  =  ACTION_UPDATE;
        private const verify_route  =  'verify';
        private const read_route    =  ACTION_READ;


        /**
         * @return void
         */
        protected final function execute(): void
        {
            Route::controller( AccountController::class )->group
            (
                function(): void
                {
                    Route::post( self::create_route, 'public_create' );
                    Route::post( self::login_route, 'login' );
                    $this->secureRoutes();
                }
            );
        }

        /**
         * @return void
         */
        protected final function secureRoutes(): void
        {
            Route::middleware( SanctumMiddleware )->group
            (
                function()
                {
                    Route::get( self::read_route, 'public_read' );
                    Route::delete( self::delete_route, 'public_delete' );
                    Route::get( self::logout_route, 'logout' );
                    Route::get( self::me_route, 'me' );
                    Route::patch( self::update_route, 'public_update' );
                    Route::post( self::verify_route, 'verify' );
                }
            );
        }
    }

    function MakeAccountApi()
    {
        $api = new AccountApi();
        $api->run();
    }

?>