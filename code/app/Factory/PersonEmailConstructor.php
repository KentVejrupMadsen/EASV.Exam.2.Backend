<?php
    namespace App\Factory;

    use Carbon\Carbon;
    use Illuminate\Support\Str;

    use App\Models\tables\User;


    /**
     *
     */
    class PersonEmailConstructor
    {
        public function __construct()
        {

        }

        //

        private static ?PersonEmailConstructor $singleton =  null;

        /**
         * @return PersonEmailConstructor|null
         */
        public static function getSingleton(): ?PersonEmailConstructor
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton( new PersonEmailConstructor() );
            }

            return self::$singleton;
        }

        /**
         * @param PersonEmailConstructor|null $singleton
         * @return void
         */
        public static function setSingleton( ?PersonEmailConstructor $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>