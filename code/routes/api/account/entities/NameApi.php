<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    // External library
    use Illuminate\Support\Facades\Route;

    // Internal library
    use App\Http\Controllers\httpControllers\account\entities\PersonNameController;
    use App\Http\Controllers\RouteController;


    /**
     *
     */
    class NameApi
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
        const route = 'name';

        const read_route = ACTION_READ;
        const create_route = ACTION_CREATE;
        const update_route = ACTION_UPDATE;
        const delete_route = ACTION_DELETE;


        /**
         * @return void
         */
        protected final function execute(): void
        {
            Route::controller( PersonNameController::class )->group
            (
                function(): void
                {
                    Route::get( self::read_route, 'public_read' );
                    Route::post( self::create_route,'public_create' );
                    Route::patch( self::update_route, 'public_update' );
                    Route::delete( self::delete_route, 'public_delete' );
                }
            );
        }
    }

    /**
     * @return void
     */
    function MakeNameApi(): void
    {
        $name = new NameApi();
        $name->run();
    }
?>