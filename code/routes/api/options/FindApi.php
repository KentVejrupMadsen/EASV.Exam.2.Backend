<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    // External 
	use Illuminate\Support\Facades\Route;
	
	// Internal
	use App\Http\Controllers\schemas\options\find\FindController;
	use App\Routes\Controllers\RouteController;

	/**
     *
     */
    class FindApi
        extends RouteController
    {
        private const route = 'find';

        /**
         *
         */
        public function __construct()
        {
            $this->setRoute( self::route );
        }


        /**
         * @return void
         */
        protected final function execute(): void
        {
            Route::controller( FindController::class )->group
            (
                function(): void
                {
                    Route::post( 'email', 'publicFind' );
                }
            );
        }

    }


    /**
     * @return void
     */
    function MakeFindApi(): void
    {
        $api = new FindApi();
        $api->run();
    }
?>
