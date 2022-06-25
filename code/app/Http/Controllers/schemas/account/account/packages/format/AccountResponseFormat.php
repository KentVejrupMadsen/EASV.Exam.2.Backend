<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Http\Controllers\schemas\account\account\packages\format;


    /**
     *
     */
    abstract class AccountResponseFormat
    {
        /**
         * @param array $array
         * @return bool
         */
        public abstract function formatParameters( Array $array ): bool;

        /**
         * @return string
         */
        public abstract function retrieveOutput(): string;
    }
?>
