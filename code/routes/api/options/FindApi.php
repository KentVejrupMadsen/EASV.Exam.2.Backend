<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */

use App\Http\Controllers\httpControllers\options\FindController;
use App\Routes\Controllers\RouteController;
use Illuminate\Support\Facades\Route;


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