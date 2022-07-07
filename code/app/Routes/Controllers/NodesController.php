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
