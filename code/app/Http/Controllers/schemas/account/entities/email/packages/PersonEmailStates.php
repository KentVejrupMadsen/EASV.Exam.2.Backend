<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    namespace App\Http\Controllers\schemas\account\entities\email\packages;


    use App\Http\Controllers\templates\States;


    /**
     *
     */
    class PersonEmailStates
        extends States
    {
        /**
         *
         */
        public function __construct()
        {

        }


        // Variables
        private static ?PersonEmailStates $singleton =  null;

        /**
         * @return PersonEmailStates|null
         */
        public static final function getSingleton(): ?PersonEmailStates
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton( new PersonEmailStates() );
            }

            return self::$singleton;
        }

        /**
         * @param PersonEmailStates|null $singleton
         * @return void
         */
        public static final function setSingleton( ?PersonEmailStates $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>