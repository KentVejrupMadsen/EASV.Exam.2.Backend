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

        /**
         * @param array $input
         * @return mixed
         */
        public function createModel( array $input ): mixed
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


        // Variables
        private static ?PersonEmailBuilder $singleton =  null;

        /**
         * @return PersonEmailBuilder|null
         */
        public static final function getSingleton(): ?PersonEmailBuilder
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton( new PersonEmailBuilder() );
            }

            return self::$singleton;
        }

        /**
         * @param PersonEmailBuilder|null $singleton
         * @return void
         */
        public static final function setSingleton( ?PersonEmailBuilder $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>