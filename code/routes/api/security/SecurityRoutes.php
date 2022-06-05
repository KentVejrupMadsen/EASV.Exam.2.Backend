<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    require_once 'SecurityCSRFApi.php';
    require_once 'SecurityConfigurationApi.php';
    require_once 'SecurityRecapApi.php';

    use App\Http\Controllers\NodesController;


    class SecurityRoutes
        extends NodesController
    {
        const SecurityRoute = 'securities';

        public function __construct()
        {
            $this->setNodeRouteName( self::SecurityRoute );
        }

        protected function execute(): void
        {
            MakeSecurityCSRFApi();
            MakeSecurityConfigurationApi();
            MakeSecurityRecapApi();
        }
    }


    function MakeSecurityRoutes(): void
    {
        $routes = new SecurityRoutes();
        $routes->run();
    }
?>