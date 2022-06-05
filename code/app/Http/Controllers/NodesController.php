<?php
    namespace App\Http\Controllers;

    use Illuminate\Support\Facades\Route;

    /**
     *
     */
    abstract class NodesController
    {
        /**
         * @return void
         */
        protected abstract function execute(): void;

        /**
         * @return void
         */
        public final function run(): void
        {
            Route::prefix( $this->getNodeRouteName() )->group(
                function(): void
                {
                    $this->execute();
                }
            );
        }

        // Variables
        private ?string $nodeRouteName = null;

        /**
         * @return string
         */
        public final function getNodeRouteName(): string
        {
            return $this->nodeRouteName;
        }

        /**
         * @param string $nodeRouteName
         * @return void
         */
        public final function setNodeRouteName( string $nodeRouteName ): void
        {
            $this->nodeRouteName = $nodeRouteName;
        }
    }
?>