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
    
    // Internal Models
    use App\Http\Controllers\templates\Builder;
    use App\Models\tables\AddressModel;


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


        /**
         * @param array $input
         * @return mixed
         */
        public final function templateModel( array $input ): mixed
        {

            return null;
        }


        /**
         * @param array $input
         * @return mixed
         */
        public final function createModel( array $input ): mixed
        {
            

            return null;
        }


        /**
         * @param array $array
         * @return void
         */
        public final function creationOfModels( array $array ): void
        {
        
        }


        /***
         * @param array $array
         * @return void
         */
        public final function templateModels( array $array ): void
        {
        
        }


        /**
         * @return array|null
         */
        public final function retrieveOutputResults(): ?array
        {
        
            return null;
        }


        /**
         * @return AddressModel|null
         */
        public final function retrieveSingular(): ?AddressModel
        {
            
            return null;
        }


        // Variables
        private static ?PersonAddressBuilder $singleton =  null;

        /**
         * @return PersonAddressBuilder
         */
        public static final function getSingleton(): PersonAddressBuilder
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton(
                    new PersonAddressBuilder()
                );
            }

            return self::$singleton;
        }


        /**
         * @param PersonAddressBuilder $singleton
         * @return void
         */
        protected static final function setSingleton( PersonAddressBuilder $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>
