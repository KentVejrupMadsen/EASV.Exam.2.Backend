<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers;

    // Internal libraries
        // Account
    use App\Http\Controllers\http\account\AccountController;
    use App\Http\Controllers\http\account\InformationController;
    use App\Http\Controllers\http\account\NewsletterController;

        // Options
    use App\Http\Controllers\http\options\FindController;
    use App\Http\Controllers\http\options\StateController;

        // Security
    use App\Http\Controllers\http\security\SecurityConfigurationController;
    use App\Http\Controllers\http\security\SecurityCSRFTokenController;
    use App\Http\Controllers\http\security\SecurityRecaptchaController;

        // Tools
    use App\Http\Controllers\http\tools\BoardController;
    use App\Http\Controllers\http\tools\KanbanController;
    use App\Http\Controllers\http\tools\ProjectController;
    use App\Http\Controllers\http\tools\ProjectMemberController;
    use App\Http\Controllers\http\tools\TaskController;

    // external libraries
    use Illuminate\Http\Request;


    //
    class ApiHomeController
        extends Controller
    {
        /**
         * @return string
         */
        protected function currentVersionNumber(): string
        {
            return '1.0.0';
        }


        /**
         * @return string
         */
        protected function currentVersion(): string
        {
            return 'Version ' . $this->currentVersionNumber() . ' Alpha';
        }


        /**
         * @return array
         */
        protected function generateAccountApi(): array
        {
            $structure = [];

            return $structure;
        }


        /**
         * @return array
         */
        protected function generateOptionsApi(): array
        {
            $structure = [];

            return $structure;
        }


        /**
         * @return array
         */
        protected function generateSecurityApi(): array
        {
            $structure = [];

            return $structure;
        }


        /**
         * @return array
         */
        protected function generateToolsApi(): array
        {
            $structure = [];

            return $structure;
        }


        /**
         * @return array
         */
        protected final function generateExplorerStructure(): array
        {
            $structure =
            [
                'current' => $this->currentVersion(),
                'paths'   =>
                [
                    $this->currentVersionNumber() =>
                    [
                        'account'   => $this->generateAccountApi(),
                        'options'   => $this->generateOptionsApi(),
                        'security'  => $this->generateSecurityApi(),
                        'tools'     => $this->generateToolsApi()
                    ]
                ]
            ];

            return $structure;
        }

        /**
         * @return string
         */
        protected function apiUrl(): string
        {
            return './api';
        }

        /**
         * @return array
         */
        protected function generateApiExplorer(): array
        {
            $returnValue = array();

            $returnValue[ 'root' ] = $this->apiUrl();
            $returnValue[ 'explorer' ] = $this->generateExplorerStructure();

            return $returnValue;
        }


        // Response
        public final function home( Request $request )
        {
            $response = $this->generateApiExplorer();
            return Response()->json( $response );
        }


        //
        private static $controller = null;

        public static final function setSingleton( ApiHomeController $controller )
        {
            self::$controller = $controller;
        }

        public static final function getSingleton(): ApiHomeController
        {
            if(is_null(self::$controller))
            {
                self::setSingleton(new ApiHomeController());
            }

            return self::$controller;
        }
    }
?>
