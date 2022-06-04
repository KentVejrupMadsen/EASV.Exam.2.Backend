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

        const route = 'recaptcha';

        const create_route =  'create';
        const delete_route =  'delete';
        const read_route   =  'read';
        const update_route =  'update';


        /**
         * @return void
         */
        protected function execute(): void
        {
            Route::controller( SecurityRecaptchaController::class )->group
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
    function MakeSecurityRecapApi()
    {
        $api = new SecurityRecapApi();
        $api->run();
    }
?>