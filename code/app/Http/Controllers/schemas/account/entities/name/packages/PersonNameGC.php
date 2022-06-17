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

        // Variables
        private static ?PersonNameGC $singleton =  null;


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
            // Getters
        /**
         * @return PersonNameGC
         */
        public static final function getSingleton(): PersonNameGC
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton(
                    new PersonNameGC()
                );
            }

            return self::$singleton;
        }

            // Setters
        /**
         * @param PersonNameGC $singleton
         * @return void
         */
        public static final function setSingleton( PersonNameGC $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>