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
    class AccountResponseJSON
        extends AccountResponseFormat
    {
        /**
         *
         */
        public function __construct()
        {

        }


        // Variables
        private static ?AccountResponseJSON $singleton = null;

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
         * @return AccountResponseJSON
         */
        public static function getSingleton(): AccountResponseJSON
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton(
                    new AccountResponseJSON()
                );
            }

            return self::$singleton;
        }

            // setters
        /**
         * @param AccountResponseJSON $singleton
         * @return void
         */
        public static function setSingleton(AccountResponseJSON $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>
