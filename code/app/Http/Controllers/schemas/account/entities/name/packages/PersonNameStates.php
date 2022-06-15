<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    namespace App\Http\Controllers\schemas\account\entities\name\packages;

    use App\Http\Controllers\templates\States;


    /**
     *
     */
    class PersonNameStates
        extends States
    {
        /**
         *
         */
        public function __construct()
        {

        }


        // Variables
        private static ?PersonNameStates $singleton =  null;

        /**
         * @return PersonNameStates|null
         */
        public static function getSingleton(): ?PersonNameStates
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton( new PersonNameStates() );
            }

            return self::$singleton;
        }

        /**
         * @param PersonNameStates|null $singleton
         */
        public static function setSingleton( ?PersonNameStates $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>