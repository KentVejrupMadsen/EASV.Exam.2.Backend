<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
        Serves the routes for the address model.
        so the client can interact with their associated 'address model'
        though the address controller. it's boundried so the client can only
        view, update and delete they own data.
     */
    // External libraries
use App\Http\Controllers\httpControllers\account\entities\PersonAddressController;
use App\Routes\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

// Internal libraries


/**
     *
     */
    class AddressApi
        extends RouteController
    {
        /**
         *
         */
        public function __construct()
        {
            $this->setRoute( self::route );
            $this->setSecurityMiddleware( SanctumMiddleware );
        }


        // Variables
        private const route = 'address';

        private const read_route   = ACTION_READ;
        private const create_route = ACTION_CREATE;
        private const update_route = ACTION_UPDATE;
        private const delete_route = ACTION_DELETE;


        /**
         * @return void
         */
        protected final function execute(): void
        {
            Route::controller( PersonAddressController::class )->group
            (
                function(): void
                {
                    Route::get( self::read_route, 'public_read' );
                    Route::post( self::create_route, 'public_create' );
                    Route::patch( self::update_route, 'public_update' );
                    Route::delete( self::delete_route, 'public_delete' );
                }
            );
        }
    }

    /**
     * @return void
     */
    function MakeAddressApi(): void
    {
        $api = new AddressApi();
        $api->run();
    }
?>