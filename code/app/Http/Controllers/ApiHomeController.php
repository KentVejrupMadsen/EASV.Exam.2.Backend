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


    //
    class ApiHomeController
        extends Controller
    {
        protected function currentVersionNumber(): string
        {
            return '1.0.0';
        }

        protected function currentVersion(): string
        {
            return 'Version ' . $this->currentVersionNumber() . ' Alpha';
        }

        protected function generateAccountApi(): array
        {
            $structure = [];

            return $structure;
        }

        protected function generateOptionsApi(): array
        {
            $structure = [];

            return $structure;
        }

        protected function generateSecurityApi(): array
        {
            $structure = [];

            return $structure;
        }

        protected function generateToolsApi(): array
        {
            $structure = [];

            return $structure;
        }

        protected function generateExplorerStructure(): array
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
        public final function home()
        {
            $response = $this->generateApiExplorer();
            return Response()->json( $response );
        }

    }
?>
