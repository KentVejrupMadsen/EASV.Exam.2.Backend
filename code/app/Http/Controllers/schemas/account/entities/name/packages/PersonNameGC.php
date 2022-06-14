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