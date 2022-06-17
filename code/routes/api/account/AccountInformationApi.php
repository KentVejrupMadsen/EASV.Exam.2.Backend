    <?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * Serves the routes for the account models.
     */
    // Internal libraries
    use App\Http\Controllers\schemas\account\information\InformationController;
    use App\Routes\Controllers\RouteController;
    use Illuminate\Support\Facades\Route;

    // External libraries


    /**
     *
     */
    class AccountInformationApi
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
        private const route = 'information';

        private const create_route  =  ACTION_CREATE;
        private const delete_route  =  ACTION_DELETE;
        private const update_route  =  ACTION_UPDATE;
        private const read_route    =  ACTION_READ;


        /**
         * @return void
         */
        protected final function execute(): void
        {
            Route::controller( InformationController::class )->group
            (
                function(): void
                {
                    $this->secureRoutes();
                }
            );
        }

        /**
         * @return void
         */
        protected final function secureRoutes(): void
        {
            Route::middleware( SanctumMiddleware )->group
            (
                function()
                {
                    Route::get( self::read_route, 'public_read' );
                    Route::delete( self::delete_route, 'public_delete' );
                    Route::patch( self::update_route, 'public_update' );
                    Route::post( self::create_route, 'public_create' );
                }
            );
        }
    }


    /**
     * @return void
     */
    function MakeAccountInformationApi(): void
    {
        $api = new AccountInformationApi();
        $api->run();
    }
?>
