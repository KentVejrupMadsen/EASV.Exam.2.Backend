<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
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

        /**
         * @param array $array
         * @return void
         */
        public final function creationOfModels( array $array ): void
        {
            // TODO: Implement creationOfModels() method.
        }


        /**
         * @param array $array
         * @return void
         */
        public final function templateModels( array $array ): void
        {
            // TODO: Implement templateModels() method.
        }


        /**
         * @return array|null
         */
        public final function retrieveOutputResults(): ?array
        {
            // TODO: Implement retrieveOutputResults() method.
            return null;
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
         * @return mixed
         */
        public final function retrieveSingular(): mixed
        {

            return null;
        }


        // Variables
        private static ?PersonNameBuilder $singleton =  null;

        // Accessors
            // Getters
        /**
         * @return PersonNameBuilder
         */
        public static function getSingleton(): PersonNameBuilder
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton(
                    new PersonNameBuilder()
                );
            }

            return self::$singleton;
        }

            // Setters
        /**
         * @param PersonNameBuilder $singleton
         * @return void
         */
        protected static function setSingleton( PersonNameBuilder $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>
