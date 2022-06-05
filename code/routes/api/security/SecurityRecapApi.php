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
    use App\Http\Controllers\httpControllers\security\SecurityRecaptchaController;
    use App\Http\Controllers\RouteController;


    /**
     *
     */
    class SecurityRecapApi
        extends RouteController
    {
        /**
         *
         */
        public function __construct()
        {
            $this->setRoute( self::route );
        }

        // Variable
        const route = 'recaptcha';

        const create_route =  ACTION_CREATE;
        const delete_route =  ACTION_DELETE;
        const read_route   =  ACTION_READ;
        const update_route =  ACTION_UPDATE;


        /**
         * @return void
         */
        protected final function execute(): void
        {
            Route::controller( SecurityRecaptchaController::class )->group
            (
                function(): void
                {
                    Route::post( self::create_route, 'public_create' );
                    Route::delete( self::delete_route, 'public_delete' );
                    Route::get( self::read_route, 'public_read' );
                    Route::patch( self::update_route, 'public_update' );
                }
            );
        }
    }

    /**
     * @return void
     */
    function MakeSecurityRecapApi(): void
    {
        $api = new SecurityRecapApi();
        $api->run();
    }
?>