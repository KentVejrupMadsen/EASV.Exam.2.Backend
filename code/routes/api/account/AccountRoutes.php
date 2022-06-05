<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    // External libraries
    use Illuminate\Support\Facades\Route;

    require_once 'entities/EntitiesRoutes.php';
    require_once 'NewsletterApi.php';
    require_once 'AccountApi.php';

    use App\Http\Controllers\NodesController;


    /**
     *
     */
    class AccountRoutes
        extends NodesController
    {
        const accounts_route = 'accounts';

        public function __construct()
        {
            $this->setNodeRouteName( self::accounts_route );
        }

        protected function execute(): void
        {
            MakeAccountApi();
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