<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    // External libraries
use App\Http\Controllers\schemas\security\configuration\SecurityConfigurationController;
use App\Routes\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

// Internal libraries


/**
     *
     */
    class SecurityConfigurationApi
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

        // variables
        private const route = 'configuration';

        private const create_route = ACTION_CREATE;
        private const delete_route = ACTION_DELETE;
        private const read_route   = ACTION_READ;
        private const update_route = ACTION_UPDATE;


        /**
         * @return void
         */
        protected final function execute(): void
        {
            Route::controller( SecurityConfigurationController::class )->group
            (
                function(): void
                {
                    Route::post( self::create_route, 'public_create' );
                    Route::delete( self::delete_route, 'public_delete' );
                    Route::get( self::read_route, 'public_read' );
                    Route::patch( self::update_route, 'public_update' );
                }
            );
        }
    }


    /**
     * @return void
     */
    function MakeSecurityConfigurationApi(): void
    {
        $api = new SecurityConfigurationApi();
        $api->run();
    }
?>
