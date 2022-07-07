<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License
        * (https://github.com/KentVejrupMadsen/EASV.Exam.2.Backend/blob/main/License.md)
        * (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Routes\Controllers;
    
    // Externally
    use Illuminate\Support\Facades\Route;


    /**
     *
     */
    abstract class RouteController
    {
        // Variables
        private ?string $route = null;
        private ?string $securityMiddleware = null;

        /**
         * @return void
         */
        protected final function baseRoot(): void
        {
            Route::prefix( $this->route )->group
            (
                function()
                {
                    $this->execute();
                }
            );
        }


        /**
         * @param string $nameOfMiddleware
         * @return void
         */
        protected function middleware( string $nameOfMiddleware ): void
        {
            Route::middleware( $nameOfMiddleware )->group
            (
                function()
                {
                    $this->baseRoot();
                }
            );
        }

        //
        protected abstract function execute();


        /**
         * @return void
         */
        public final function run(): void
        {
            if( $this->getUseSecurity() )
            {
                $this->middleware( $this->getSecurityMiddleware() );
            }
            else
            {
                $this->baseRoot();
            }
        }

        /**
         * @return string|null
         */
        public final function getRoute(): ?string
        {
            return $this->route;
        }

        /**
         * @param string|null $route
         */
        protected final function setRoute( ?string $route ): void
        {
            $this->route = $route;
        }


        /**
         * @return string|null
         */
        public final function getSecurityMiddleware(): ?string
        {
            return $this->securityMiddleware;
        }


        /**
         * @param string $securityMiddleware
         * @return void
         */
        public final function setSecurityMiddleware( string $securityMiddleware ): void
        {
            $this->securityMiddleware = $securityMiddleware;
        }


        /**
         * @return bool
         */
        public final function getUseSecurity(): bool
        {
            return isset( $this->securityMiddleware );
        }
    }
?>
