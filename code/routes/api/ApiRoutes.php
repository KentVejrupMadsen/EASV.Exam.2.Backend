<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */

    // Internal
    use App\Http\Controllers\NodesController;

    require_once 'account/AccountRoutes.php';
    require_once 'HomeApi.php';

    require_once 'options/OptionsRoutes.php';
    require_once 'tool/ToolRoutes.php';

    require_once 'security/SecurityRoutes.php';
    require_once 'status/StatusRoutes.php';

    const ACTION_CREATE = 'create';
    const ACTION_UPDATE = 'update';
    const ACTION_DELETE = 'delete';
    const ACTION_READ = 'read';

    const SanctumMiddleware = 'auth:sanctum';


    /**
     *
     */
    class ApiRoutes
        extends NodesController
    {
        private const CURRENT_VERSION = '1.0.0';
        private const VersionUrl = '/' . self::CURRENT_VERSION;

        /**
         *
         */
        public function __construct()
        {
            $this->setNodeRouteName( self::VersionUrl );
        }


        /**
         * @return void
         */
        protected function execute(): void
        {
            MakeAccountRoutes();
            HomeApi();

            MakeOptionsRoutes();

            MakeSecurityRoutes();
            MakeStatusRoutes();

            makeToolRoutes();
        }

    }


    /**
     * @return void
     */
    function ApiRoutes(): void
    {
        $node = new ApiRoutes();
        $node->run();
    }

    ApiRoutes();
?>