<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Http\Controllers\schemas\account\entities\email\packages;
	
	// Internal
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

        // Accessors
            // Getters
        /**
         * @return PersonEmailStates
         */
        public static final function getSingleton(): PersonEmailStates
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton(
                    new PersonEmailStates()
                );
            }

            return self::$singleton;
        }

            // Setters
        /**
         * @param PersonEmailStates $singleton
         * @return void
         */
        protected static final function setSingleton( PersonEmailStates $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>
