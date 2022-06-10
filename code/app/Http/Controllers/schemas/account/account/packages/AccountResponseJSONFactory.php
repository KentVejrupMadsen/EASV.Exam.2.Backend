<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\schemas\account\account\packages;

    // External libraries
    use Illuminate\Routing\Controller
        as BaseController;

    // Internal library


    /**
     *
     */
    class AccountResponseJSONFactory
        extends BaseController
    {
        private static $singleton = null;

        /**
         * @return AccountResponseJSONFactory
         */
        public static function getSingleton(): AccountResponseJSONFactory
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton( new AccountResponseJSONFactory() );
            }

            return self::$singleton;
        }

        /**
         * @param AccountResponseJSONFactory $singleton
         * @return void
         */
        public static function setSingleton( AccountResponseJSONFactory $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>