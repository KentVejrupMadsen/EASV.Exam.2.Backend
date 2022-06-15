<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
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