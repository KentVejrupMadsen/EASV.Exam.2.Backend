<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     */
    namespace App\Http\Controllers\templates;


    abstract class Truncator
    {
        public abstract function removal( Array $array ): bool;
        public abstract function removalOfModels( Array $array ): bool;
    }
?>