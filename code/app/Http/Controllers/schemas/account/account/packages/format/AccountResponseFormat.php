<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\schemas\account\account\packages\format;


    /**
     *
     */
    abstract class AccountResponseFormat
    {
        /**
         *
         */
        public function __construct()
        {

        }

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