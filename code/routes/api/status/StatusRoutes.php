<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
     
     // Internal
	use App\Http\Controllers\schemas\status\health\HealthController;
	use App\Routes\Controllers\NodesController;

	// External 
	use Illuminate\Support\Facades\Route;


	/**
     *
     */
    class StatusRoutes
        extends NodesController
    {
        /**
         * 
         */
        public function __construct()
        {
            $this->setNodeRouteName( self::statusRoute );
        }

        //
        private const statusRoute = 'status';

        /**
         * @return void
         */
        protected function execute(): void
        {
            Route::controller( HealthController::class )->group
            (
                function(): void
                {
                    Route::get( 'now', 'now' );
                }
            );
        }
    }

    /**
     * @return void
     */
    function MakeStatusRoutes(): void
    {
        $routes = new StatusRoutes();
        $routes->run();
    }
?>
