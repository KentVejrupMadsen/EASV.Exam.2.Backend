<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    namespace App\Http\Controllers\schemas\account\entities\name\packages;

    use App\Http\Controllers\templates\Builder;


    /**
     *
     */
    class PersonNameBuilder
        extends Builder
    {
        /**
         *
         */
        public function __construct()
        {

        }



        // Variables
        private static ?PersonNameBuilder $singleton =  null;

        /**
         * @return PersonNameBuilder|null
         */
        public static function getSingleton(): ?PersonNameBuilder
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton( new PersonNameBuilder() );
            }

            return self::$singleton;
        }

        /**
         * @param PersonNameBuilder|null $singleton
         */
        public static function setSingleton( ?PersonNameBuilder $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>