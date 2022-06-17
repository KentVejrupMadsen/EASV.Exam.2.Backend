<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
     
     // Internal
use App\Http\Controllers\schemas\status\health\HealthController;
use App\Routes\Controllers\NodesController;
use Illuminate\Support\Facades\Route;

// External 


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
