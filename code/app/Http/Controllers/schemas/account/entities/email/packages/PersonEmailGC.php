<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    namespace App\Http\Controllers\schemas\account\entities\email\packages;

    use App\Http\Controllers\templates\Truncator;
    use App\Models\tables\AccountEmailModel;
    use App\Http\Controllers\templates\Builder;


    /**
     *
     */
    class PersonEmailGC
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
        private static ?PersonEmailGC $singleton =  null;

        /**
         * @return PersonEmailGC|null
         */
        public static function getSingleton(): ?PersonEmailGC
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton( new PersonEmailGC() );
            }

            return self::$singleton;
        }

        /**
         * @param PersonEmailGC|null $singleton
         * @return void
         */
        public static function setSingleton( ?PersonEmailGC $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>