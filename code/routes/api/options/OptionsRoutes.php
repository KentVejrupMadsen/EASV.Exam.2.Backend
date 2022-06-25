<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    // Internal libraries
    require_once 'FindApi.php';
    require_once 'StateApi.php';

	use App\Routes\Controllers\NodesController;


	/**
     *
     */
    class OptionsRoutes
        extends NodesController
    {
        private const options_route = 'options';

        /**
         *
         */
        public function __construct()
        {
            $this->setNodeRouteName( self::options_route );
        }

        /**
         * @return void
         */
        protected function execute(): void
        {
            MakeFindApi();
            MakeStateApi();
        }
    }

    /**
     * @return void
     */
    function MakeOptionsRoutes(): void
    {
        $routes = new OptionsRoutes();
        $routes->run();
    }
?>
