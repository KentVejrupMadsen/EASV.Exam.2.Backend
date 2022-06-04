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
    use App\Http\Controllers\httpControllers\security\SecurityCSRFTokenController;
    use App\Http\Controllers\RouteController;


    /**
     *
     */
    class SecurityCSRFApi
        extends RouteController
    {
        /**
         *
         */
        public function __construct()
        {
            $this->setRoute( self::route );
        }

        private const route = 'csrf';

        private const access_route = 'access';
        private const create_route = 'create';
        private const delete_Route = 'delete';
        private const read_route   = 'read';
        private const reset_route  = 'reset';
        private const update_route = 'update';

        /**
         * @return void
         */
        protected function execute()
        {
            Route::controller( SecurityCSRFTokenController::class )->group
            (
                function(): void
                {
                    Route::post( self::access_route, 'access' );
                    Route::get( self::create_route, 'publicCreate' );
                    Route::delete( self::delete_Route, 'publicDelete' );
                    Route::get( self::read_route,'publicRead' );
                    Route::patch( self::reset_route, 'reset' );
                    Route::patch( self::update_route, 'publicUpdate' );
                }
            );
        }
    }


    /**
     * @return void
     */
    function MakeSecurityCSRFApi(): void
    {
        $model = new SecurityCSRFApi();
        $model->run();
    }
?>