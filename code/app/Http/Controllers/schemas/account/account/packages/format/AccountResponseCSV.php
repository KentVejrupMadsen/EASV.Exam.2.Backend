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

    // Internal library


    /**
     *
     */
    class AccountResponseCSV
        extends AccountResponseFormat
    {
        /**
         *
         */
        public function __construct()
        {

        }

        // Variables
        private static ?AccountResponseCSV $singleton = null;


        /**
         * @param array $array
         * @return bool
         */
        public final function formatParameters( array $array ): bool
        {

            return false;
        }

        /**
         * @return string
         */
        public final function retrieveOutput(): string
        {

            return false;
        }

        // getters
        /**
         * @return AccountResponseCSV
         */
        public static function getSingleton(): AccountResponseCSV
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton(
                    new AccountResponseCSV()
                );
            }

            return self::$singleton;
        }

            // setters
        /**
         * @param AccountResponseCSV $singleton
         * @return void
         */
        public static function setSingleton( AccountResponseCSV $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>
