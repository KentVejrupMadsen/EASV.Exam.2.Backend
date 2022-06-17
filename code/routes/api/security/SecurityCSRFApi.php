<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:

     */
    // External libraries
use App\Http\Controllers\schemas\security\csrf\SecurityCSRFTokenController;
use App\Routes\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

// Internal libraries


/**
     *
     */
    class SecurityCSRFApi
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
        private const route = 'csrf';

        private const access_route = 'access';
        private const create_route = ACTION_CREATE;
        private const delete_Route = ACTION_DELETE;
        private const read_route   = ACTION_READ;
        private const reset_route  = 'reset';
        private const update_route = ACTION_UPDATE;


        /**
         * @return void
         */
        protected final function execute(): void
        {
            Route::controller( SecurityCSRFTokenController::class )->group
            (
                function(): void
                {
                    Route::post( self::access_route, 'access' );
                    Route::get( self::create_route, 'public_create' );
                    Route::delete( self::delete_Route, 'public_delete' );
                    Route::get( self::read_route,'public_read' );
                    Route::patch( self::reset_route, 'reset' );
                    Route::patch( self::update_route, 'public_update' );
                }
            );
        }
    }


    /**
     * @return void
     */
    function MakeSecurityCSRFApi(): void
    {
        $model = new SecurityCSRFApi();
        $model->run();
    }
?>
