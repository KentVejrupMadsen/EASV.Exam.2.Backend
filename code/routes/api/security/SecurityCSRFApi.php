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

        // Variables
        private const route = 'csrf';

        private const access_route = 'access';
        private const create_route = ACTION_CREATE;
        private const delete_Route = ACTION_DELETE;
        private const read_route   = ACTION_READ;
        private const reset_route  = 'reset';
        private const update_route = ACTION_UPDATE;


        /**
         * @return void
         */
        protected final function execute(): void
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