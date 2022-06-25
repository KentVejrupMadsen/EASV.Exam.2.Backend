<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
        Setups a 'node route'. It makes the route prefix for account entities.
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    // Internally
    require_once 'AddressApi.php';
    require_once 'EmailApi.php';
    require_once 'NameApi.php';

	use App\Routes\Controllers\NodesController;


	/**
     *
     */
    class EntitiesRoutes
        extends NodesController
    {
        private const EntityRoute = 'entities';

        /**
         *
         */
        public function __construct()
        {
            $this->setNodeRouteName( self::EntityRoute );
        }

        /**
         * @return void
         */
        protected function execute(): void
        {
            MakeAddressApi();
            MakeEmailApi();
            MakeNameApi();
        }
    }

    /**
     * @return void
     */
    function MakeEntitiesRoutes()
    {
        $routes = new EntitiesRoutes();
        $routes->run();
    }
?>
