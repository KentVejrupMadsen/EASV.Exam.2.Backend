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

        public function templateModel( array $input ): mixed
        {

            return null;
        }

        public function createModel( array $input ): mixed
        {

            return null;
        }

        public function creationOfModels( array $array ): void
        {
            // TODO: Implement creationOfModels() method.
        }

        public function templateModels( array $array ): void
        {
            // TODO: Implement templateModels() method.
        }

        public function retrieveOutputResults(): ?array
        {
            // TODO: Implement retrieveOutputResults() method.
            return null;
        }

        // Variables
        private static ?PersonAddressBuilder $singleton =  null;

        /**
         * @return PersonAddressBuilder|null
         */
        public static function getSingleton(): ?PersonAddressBuilder
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
         * @param PersonAddressBuilder|null $singleton
         */
        public static function setSingleton( ?PersonAddressBuilder $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>