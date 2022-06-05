<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    // External libraries
    use Illuminate\Support\Facades\Route;

    // Internal libraries
    use App\Http\Controllers\httpControllers\account\entities\PersonEmailController;
    use App\Http\Controllers\RouteController;


    class EmailApi
        extends RouteController
    {
        public function __construct()
        {
            $this->setRoute( self::route );
            $this->setSecurityMiddleware( SanctumMiddleware );
        }

        private const route  = 'email';

        private const route_read   = ACTION_READ;
        private const route_create = ACTION_CREATE;
        private const route_update = ACTION_UPDATE;
        private const route_delete = ACTION_DELETE;


        /**
         * @return void
         */
        protected final function execute(): void
        {
            Route::controller( PersonEmailController::class )->group
            (
                function(): void
                {
                    Route::get( self::route_read, 'public_read' );
                    Route::post( self::route_create, 'public_create' );
                    Route::patch( self::route_update, 'public_update' );
                    Route::delete( self::route_delete, 'public_delete' );
                }
            );
        }
    }


    function MakeEmailApi(): void
    {
        $router = new EmailApi();
        $router->run();
    }
?>