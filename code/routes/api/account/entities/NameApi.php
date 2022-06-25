<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
        Serves the routes for the name model.
        so the client can interact with their associated 'name models'
        though the person name controller. it's boundried so the client can only
        view, update and delete they own data.
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
   
     */
    // External library
	use Illuminate\Support\Facades\Route;

	// Internal library
	use App\Http\Controllers\schemas\account\entities\name\PersonNameController;
	use App\Routes\Controllers\RouteController;


	/**
     *
     */
    class NameApi
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
        private const route = 'name';

        private const read_route = ACTION_READ;
        private const create_route = ACTION_CREATE;
        private const update_route = ACTION_UPDATE;
        private const delete_route = ACTION_DELETE;


        /**
         * @return void
         */
        protected final function execute(): void
        {
            Route::controller( PersonNameController::class )->group
            (
                function(): void
                {
                    Route::get( self::read_route, 'public_read' );
                    Route::post( self::create_route,'public_create' );
                    Route::patch( self::update_route, 'public_update' );
                    Route::delete( self::delete_route, 'public_delete' );
                }
            );
        }
    }

    /**
     * @return void
     */
    function MakeNameApi(): void
    {
        $name = new NameApi();
        $name->run();
    }
?>
