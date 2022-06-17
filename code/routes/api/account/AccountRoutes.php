<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
        Setups a 'node route'. It makes the route prefix for accounts.
     */
    // Internal libraries
    require_once 'entities/EntitiesRoutes.php';
    require_once 'NewsletterApi.php';
    require_once 'AccountApi.php';
    require_once 'AccountInformationApi.php';

    use App\Routes\Controllers\NodesController;


    /**
     *
     */
    class AccountRoutes
        extends NodesController
    {
        private const accounts_route = 'accounts';

        /**
         *
         */
        public function __construct()
        {
            $this->setNodeRouteName( self::accounts_route );
        }

        /**
         * @return void
         */
        protected function execute(): void
        {
            MakeAccountApi();
            MakeAccountInformationApi();
            MakeNewsletterApi();
            MakeEntitiesRoutes();
        }
    }

    /**
     * @return void
     */
    function MakeAccountRoutes(): void
    {
        $routes = new AccountRoutes();
        $routes->run();
    }
?>
