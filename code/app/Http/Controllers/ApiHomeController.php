<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers;
    
        // external libraries
use Illuminate\Http\Request;

// Internal libraries
                // Account
    
    
    // Options
    
    
    // Security


    /**
     * 
     */
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
                    'routes' =>
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
            return url('/api');
        }


        /**
         * @return array
         */
        protected function generateApiExplorer(): array
        {
            $returnValue = array();

            $returnValue[ 'parent' ] = $this->apiUrl();
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


        // accessors
        /**
         * @param ApiHomeController $controller
         * @return void
         */
        public static final function setSingleton( ApiHomeController $controller ): void
        {
            self::$controller = $controller;
        }

        /**
         * @return ApiHomeController
         */
        public static final function getSingleton(): ApiHomeController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new ApiHomeController() );
            }

            return self::$controller;
        }
    }
?>
