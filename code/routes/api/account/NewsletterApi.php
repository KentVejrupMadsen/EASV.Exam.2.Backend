<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    // External libraries
	use Illuminate\Support\Facades\Route;
	
	// Internal libraries
	use App\Http\Controllers\schemas\account\newsletter\NewsletterController;
	use App\Routes\Controllers\RouteController;


	/**
     *
     */
    class NewsletterApi
        extends RouteController
    {
        /**
         *
         */
        public function __construct()
        {
            $this->setRoute( self::route );
        }

        private const route = 'newsletter';

        private const create_route =  ACTION_CREATE;
        private const read_route   =  ACTION_READ;
        private const update_route =  ACTION_UPDATE;
        private const delete_route =  ACTION_DELETE;


        /**
         * @return void
         */
        protected function execute(): void
        {
            Route::controller( NewsletterController::class )->group
            (
                function(): void
                {
                    Route::post( self::create_route, 'public_create' );
                    Route::get( self::read_route, 'public_read' );
                    Route::patch( self::update_route, 'public_update' );
                    Route::delete( self::delete_route, 'public_delete' );
                }
            );
        }

    }

    /**
     * @return void
     */
    function MakeNewsletterApi(): void
    {
        $newsletter = new NewsletterApi();
        $newsletter->run();
    }
?>
