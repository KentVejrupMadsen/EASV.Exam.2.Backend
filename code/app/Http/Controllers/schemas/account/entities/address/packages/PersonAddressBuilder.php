<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    namespace App\Http\Controllers\schemas\account\entities\address\packages;

    use App\Http\Controllers\templates\Builder;


    /**
     *
     */
    class PersonAddressBuilder
        extends Builder
    {
        /**
         *
         */
        public function __construct()
        {

        }

        // Variables
        private static ?AccountBuilder $singleton =  null;

        /**
         * @return AccountBuilder|null
         */
        public static function getSingleton(): ?AccountBuilder
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton( new AccountBuilder() );
            }

            return self::$singleton;
        }

        /**
         * @param AccountBuilder|null $singleton
         */
        public static function setSingleton( ?AccountBuilder $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>