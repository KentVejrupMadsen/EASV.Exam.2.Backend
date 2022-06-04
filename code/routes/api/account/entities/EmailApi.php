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

        }

        private const route  = 'email';

        private const route_read   = 'read';
        private const route_create = 'create';
        private const route_update = 'update';
        private const route_delete = 'delete';

        /**
         * @return void
         */
        public final function execute()
        {
            $this->EmailApi();
        }

        /**
         *
         */
        private function EmailApi()
        {
            Route::prefix( self::route )->group
            (
                function(): void
                {
                    Route::controller( PersonEmailController::class )->group
                    (
                        function(): void
                        {
                            Route::get( self::route_read, 'read' );
                            Route::post( self::route_create, 'create' );
                            Route::patch( self::route_update, 'update' );
                            Route::delete( self::route_delete, 'delete' );
                        }
                    );
                }
            );
        }
    }


    function MakeEmailApi(): void
    {
        $router = new EmailApi();
        $router->execute();
    }
?>