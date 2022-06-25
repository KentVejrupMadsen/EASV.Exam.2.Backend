<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
     // external libraries
	use Illuminate\Support\Facades\Route;
	
	// Internal libraries
	use App\Http\Controllers\schemas\options\states\StateController;
	use App\Routes\Controllers\RouteController;


	/**
     *
     */
    class StateApi
        extends RouteController
    {
        /**
         *
         */
        public function __construct()
        {
            $this->setRoute( self::route );
        }

        private const route = 'state';


        /**
         * @return void
         */
        protected function execute()
        {
            Route::controller( StateController::class )->group
            (
                function(): void
                {
                    Route::post( 'email', 'publicState' );
                }
            );
        }
    }


    /**
     * @return void
     */
    function MakeStateApi(): void
    {
        $api = new StateApi();
        $api->run();
    }
?>
