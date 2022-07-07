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
