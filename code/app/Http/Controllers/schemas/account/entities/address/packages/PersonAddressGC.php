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

    //
    use App\Http\Controllers\templates\Truncator;
    
    //


    /**
     *  Manages the deletion of entities and specific elements.
     */
    class PersonAddressGC
        extends Truncator
    {
        /**
         *
         */
        public function __construct()
        {

        }


        // Variables
        private static ?PersonAddressGC $singleton =  null;



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


        /**
         * @return bool
         */
        public final function removeByIds(): bool
        {
            return false;
        }

        /**
         * @return bool
         */
        public final function removeById(): bool
        {
            return false;
        }


        // Accessors
            // getters
        /**
         * @return PersonAddressGC
         */
        public static final function getSingleton(): PersonAddressGC
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton(
                    new PersonAddressGC()
                );
            }

            return self::$singleton;
        }

            // setters
        /**
         * @param PersonAddressGC $singleton
         * @return void
         */
        protected static final function setSingleton( PersonAddressGC $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>
