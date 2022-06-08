<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */

    // External libraries
    use Illuminate\Support\Facades\Route;

    // Internal libraries
    use App\Http\Controllers\httpControllers\tools\BoardController;
    use App\Http\Controllers\RouteController;


    /**
     *
     */
    class BoardApi
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

        //
        private const route       = 'board';

        private const create_route = ACTION_CREATE;
        private const delete_route = ACTION_DELETE;
        private const read_route   = ACTION_READ;
        private const update_route = ACTION_UPDATE;


        /**
         * @return void
         */
        protected final function execute(): void
        {
            Route::controller( BoardController::class )->group
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
    function MakeBoardApi(): void
    {
        $api = new BoardApi();
        $api->run();
    }
?>