<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    namespace App\Http\Controllers\schemas\account\account\packages\format;

    // Internal library


    /**
     *
     */
    class AccountResponseXML
        extends AccountResponseFormat
    {
        /**
         *
         */
        public function __construct()
        {

        }

        // Variables
        private static ?AccountResponseXML $singleton = null;

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
         * @return AccountResponseXML
         */
        public static function getSingleton(): AccountResponseXML
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton( new AccountResponseXML() );
            }

            return self::$singleton;
        }

            // setters
        /**
         * @param AccountResponseXML $singleton
         * @return void
         */
        public static function setSingleton( AccountResponseXML $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>