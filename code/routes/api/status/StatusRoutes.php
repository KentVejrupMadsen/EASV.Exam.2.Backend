<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\httpControllers\status\HealthController;
    use App\Http\Controllers\NodesController;


    /**
     *
     */
    class StatusRoutes
        extends NodesController
    {
        const statusRoute = 'status';

        public function __construct()
        {
            $this->setNodeRouteName( self::statusRoute );
        }

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