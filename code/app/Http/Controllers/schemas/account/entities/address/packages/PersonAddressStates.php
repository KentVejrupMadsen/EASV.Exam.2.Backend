<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Http\Controllers\schemas\account\entities\address\packages;


    // Internal
    use App\Http\Controllers\templates\States;


    /**
     *  Manages the deletion of entities and specific elements.
     */
    class PersonAddressStates
        extends States
    {
        /**
         *
         */
        public function __construct()
        {

        }





        // Variables
        private static ?PersonAddressStates $singleton =  null;


        // Accessors
            // getters
        /**
         * @return PersonAddressStates
         */
        public static final function getSingleton(): PersonAddressStates
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton(
                    new PersonAddressStates()
                );
            }

            return self::$singleton;
        }

            // setters
        /**
         * @param PersonAddressStates $singleton
         * @return void
         */
        protected static final function setSingleton( PersonAddressStates $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>
