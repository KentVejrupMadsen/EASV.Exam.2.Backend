<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;

    require_once 'FindApi.php';
    require_once 'StateApi.php';

    use App\Http\Controllers\NodesController;

    /**
     *
     */
    class OptionsRoutes
        extends NodesController
    {
        const options_route = 'options';

        public function __construct()
        {
            $this->setNodeRouteName( self::options_route );
        }

        protected function execute(): void
        {
            MakeFindApi();
            MakeStateApi();
        }
    }

    function MakeOptionsRoutes(): void
    {
        $routes = new OptionsRoutes();
        $routes->run();
    }
?>