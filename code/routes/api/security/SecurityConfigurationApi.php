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
    use App\Http\Controllers\httpControllers\security\SecurityConfigurationController;
    use App\Http\Controllers\RouteController;


    /**
     *
     */
    class SecurityConfigurationApi
        extends RouteController
    {
        /**
         *
         */
        public function __construct()
        {
            $this->setRoute( self::route );
        }

        // variables
        private const route = 'configuration';

        private const create_route = 'create';
        private const delete_route = 'delete';
        private const read_route   = 'read';
        private const update_route = 'update';


        /**
         * @return void
         */
        protected final function execute(): void
        {
            Route::controller( SecurityConfigurationController::class )->group
            (
                function(): void
                {
                    Route::post( self::create_route, 'publicCreate' );
                    Route::delete( self::delete_route, 'publicDelete' );
                    Route::get( self::read_route, 'publicRead' );
                    Route::patch( self::update_route, 'publicUpdate' );
                }
            );
        }
    }


    /**
     * @return void
     */
    function MakeSecurityConfigurationApi(): void
    {
        $api = new SecurityConfigurationApi();
        $api->run();
    }
?>