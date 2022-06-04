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
    use App\Http\Controllers\httpControllers\tools\TaskController;
    use App\Http\Controllers\RouteController;


    /**
     *
     */
    class TaskApi
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
        private const route = 'task';

        private const create_route = ACTION_CREATE;
        private const delete_route = ACTION_DELETE;
        private const read_route   = ACTION_READ;
        private const update_route = ACTION_UPDATE;


        /**
         * @return void
         */
        protected final function execute(): void
        {
            Route::controller( TaskController::class )->group
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
    function MakeTaskApi(): void
    {
        $api = new TaskApi();
        $api->run();
    }
?>