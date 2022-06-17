<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     */
    namespace App\Http\Controllers\templates;


    abstract class Truncator
    {
        /**
         * @param array $array
         * @return bool
         */
        public abstract function removal( Array $array ): bool;

        /**
         * @param array $array
         * @return bool
         */
        public abstract function removalOfModels( Array $array ): bool;

        // by Ids only
        /**
         * @return bool
         */
        public abstract function removeById(): bool;

        /**
         * @return bool
         */
        public abstract function removeByIds(): bool;
    }
?>