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

        private const create_route = 'create';
        private const delete_route = 'delete';
        private const read_route   = 'read';
        private const update_route = 'update';


        /**
         * @return void
         */
        protected final function execute(): void
        {
            Route::controller( TaskController::class )->group
            (
                function(): void
                {
                    Route::post( self::create_route, 'create' );
                    Route::delete( self::delete_route, 'delete' );
                    Route::get( self::read_route, 'read' );
                    Route::patch( self::update_route, 'update' );
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