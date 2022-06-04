<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers;


    /**
     * 
     */
    abstract class RouteController
    {
        // Variables
        private ?string $route = null;

        public abstract function execute();

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
        protected final function setRoute(?string $route): void
        {
            $this->route = $route;
        }
    }
?>