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
    use App\Http\Controllers\httpControllers\account\NewsletterController;
    use App\Http\Controllers\RouteController;


    /**
     *
     */
    class NewsletterApi
        extends RouteController
    {
        public function __construct()
        {
            $this->setRoute( self::route );
        }

        private const route = 'newsletter';

        private const create_route =  'create';
        private const read_route   =  'read';
        private const update_route =  'update';
        private const delete_route =  'delete';


        /**
         * @return void
         */
        protected function execute(): void
        {
            Route::controller( NewsletterController::class )->group
            (
                function(): void
                {
                    Route::post( self::create_route, 'create' );
                    Route::get( self::read_route, 'read' );
                    Route::patch( self::update_route, 'update' );
                    Route::delete( self::delete_route, 'delete' );
                }
            );
        }

    };

    function MakeNewsletterApi()
    {
        $newsletter = new NewsletterApi();
        $newsletter->run();
    }
?>