<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    // Internal Libraries
    require_once 'SecurityCSRFApi.php';
    require_once 'SecurityConfigurationApi.php';
    require_once 'SecurityRecapApi.php';

use App\Routes\Controllers\NodesController;


/**
     *
     */
    class SecurityRoutes
        extends NodesController
    {
        private const SecurityRoute = 'securities';

        /**
         *
         */
        public function __construct()
        {
            $this->setNodeRouteName( self::SecurityRoute );
        }

        /**
         * @return void
         */
        protected function execute(): void
        {
            MakeSecurityCSRFApi();
            MakeSecurityConfigurationApi();
            MakeSecurityRecapApi();
        }
    }


    /**
     * @return void
     */
    function MakeSecurityRoutes(): void
    {
        $routes = new SecurityRoutes();
        $routes->run();
    }
?>