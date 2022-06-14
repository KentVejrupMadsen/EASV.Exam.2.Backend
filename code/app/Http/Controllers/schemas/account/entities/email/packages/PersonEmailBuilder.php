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
        private static ?PersonEmailBuilder $singleton =  null;

        /**
         * @return PersonEmailBuilder|null
         */
        public static function getSingleton(): ?PersonEmailBuilder
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
        public static function setSingleton( ?PersonEmailBuilder $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>