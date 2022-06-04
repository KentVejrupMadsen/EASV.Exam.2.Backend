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


    class AddressApi
        extends RouteController
    {
        public function __construct()
        {

        }

        private const Route = 'address';

        private const read_route   = 'read';
        private const create_route = 'create';
        private const update_route = 'update';
        private const delete_route = 'delete';

        /**
         * @return void
         */
        public final function execute(): void
        {
            $this->AddressApi();
        }

        /**
         * @return void
         */
        private function AddressApi(): void
        {
            Route::prefix( self::Route )->group
            (
                function(): void
                {
                    Route::controller( PersonAddressController::class )->group
                    (
                        function(): void
                        {
                            Route::get( self::read_route, 'read' );
                            Route::post( self::create_route, 'create' );
                            Route::patch( self::update_route, 'update' );
                            Route::delete( self::delete_route, 'delete');
                        }
                    );
                }
            );
        }
    }

    function MakeAddressApi(): void
    {
        $api = new AddressApi();
        $api->execute();
    }
?>