<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    namespace App\Builders;

    use Carbon\Carbon;
    use Illuminate\Support\Str;

    use App\Models\tables\User;


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



        // Variables
        private static ?PersonNameBuilder $singleton =  null;

        /**
         * @return PersonNameBuilder|null
         */
        public static function getSingleton(): ?PersonNameBuilder
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton( new PersonNameBuilder() );
            }

            return self::$singleton;
        }

        /**
         * @param PersonNameBuilder|null $singleton
         */
        public static function setSingleton( ?PersonNameBuilder $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>