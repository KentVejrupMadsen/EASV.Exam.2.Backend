<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    namespace App\Http\Controllers\schemas\account\entities\name\packages;

    use App\Http\Controllers\templates\Truncator;


    /**
     *
     */
    class PersonNameGC
        extends Truncator
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
        public final function removal( array $array ): bool
        {

            return false;
        }

        /**
         * @param array $array
         * @return bool
         */
        public final function removalOfModels( array $array ): bool
        {

            return false;
        }


        // Variables
        private static ?PersonNameGC $singleton =  null;

        /**
         * @return PersonNameGC|null
         */
        public static function getSingleton(): ?PersonNameGC
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton( new PersonNameGC() );
            }

            return self::$singleton;
        }

        /**
         * @param PersonNameGC|null $singleton
         */
        public static function setSingleton( ?PersonNameGC $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>