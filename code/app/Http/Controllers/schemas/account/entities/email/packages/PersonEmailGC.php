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

        // Variables
        private static ?PersonEmailGC $singleton =  null;


        /**
         * @param array $array
         * @return bool
         */
        public function removal( array $array ): bool
        {

            return false;
        }

        /**
         * @param array $array
         * @return bool
         */
        public function removalOfModels( array $array ): bool
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


        /**
         * @return PersonEmailGC
         */
        public static function getSingleton(): PersonEmailGC
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton(
                    new PersonEmailGC()
                );
            }

            return self::$singleton;
        }

        /**
         * @param PersonEmailGC $singleton
         * @return void
         */
        protected static function setSingleton( PersonEmailGC $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>