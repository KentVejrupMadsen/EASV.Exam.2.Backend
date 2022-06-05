<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\httpControllers\account\entities\PersonAddressController;
    use App\Http\Controllers\RouteController;


    /**
     *
     */
    class AddressApi
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
        private const route = 'address';

        private const read_route   = ACTION_READ;
        private const create_route = ACTION_CREATE;
        private const update_route = ACTION_UPDATE;
        private const delete_route = ACTION_DELETE;


        /**
         * @return void
         */
        protected final function execute(): void
        {
            Route::controller( PersonAddressController::class )->group
            (
                function(): void
                {
                    Route::get( self::read_route, 'public_read' );
                    Route::post( self::create_route, 'public_create' );
                    Route::patch( self::update_route, 'public_update' );
                    Route::delete( self::delete_route, 'public_delete' );
                }
            );
        }
    }

    /**
     * @return void
     */
    function MakeAddressApi(): void
    {
        $api = new AddressApi();
        $api->run();
    }
?>