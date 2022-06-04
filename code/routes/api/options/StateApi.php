<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\httpControllers\options\StateController;
    use App\Http\Controllers\RouteController;


    /**
     *
     */
    class StateApi
        extends RouteController
    {
        public function __construct()
        {
            $this->setRoute( self::route );
        }

        private const route = 'state';

        protected function execute()
        {
            Route::controller( StateController::class )->group
            (
                function(): void
                {
                    Route::post( 'email', 'publicState' );
                }
            );
        }
    }

    function MakeStateApi(): void
    {
        $api = new StateApi();
        $api->run();
    }
?>