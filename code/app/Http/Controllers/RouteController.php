<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers;

    use Illuminate\Support\Facades\Route;

    /**
     * 
     */
    abstract class RouteController
    {
        // Variables
        private ?string $route = null;


        protected function baseRoot(): void
        {
            Route::prefix( $this->route )->group
            (
                $this->execute()
            );
        }

        protected abstract function execute();

        public final function run()
        {
            $this->baseRoot();
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
        protected final function setRoute(?string $route): void
        {
            $this->route = $route;
        }
    }
?>