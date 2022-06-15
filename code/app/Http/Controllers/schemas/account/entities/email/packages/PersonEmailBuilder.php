<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    namespace App\Http\Controllers\schemas\account\entities\email\packages;

    use App\Models\tables\AccountEmailModel;
    use App\Http\Controllers\templates\Builder;


    /**
     *
     */
    class PersonEmailBuilder
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
        public function templateModel( array $input ): mixed
        {

            return null;
        }


        /** Creates persistence data in the database and return it as a model
         * @param array $input
         * @return mixed
         */
        public function createModel( array $input ): mixed
        {

            return null;
        }


        /** Creates multiple persistence data in the database and returns them as models in the output file
         * @param array $array
         * @return void
         */
        public final function creationOfModels( array $array ): void
        {

        }


        /**
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
         * @return AccountEmailModel|null
         */
        public final function retrieveSingular(): ?AccountEmailModel
        {

            return null;
        }


        // Variables
        private static ?PersonEmailBuilder $singleton =  null;


        // Accessors
            // Getters
        /**
         * @return PersonEmailBuilder
         */
        public static final function getSingleton(): PersonEmailBuilder
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton(
                    new PersonEmailBuilder()
                );
            }

            return self::$singleton;
        }


            // Setters
        /**
         * @param PersonEmailBuilder $singleton
         * @return void
         */
        protected static final function setSingleton( PersonEmailBuilder $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>