<?php
    namespace App\Factory;

    use Carbon\Carbon;
    use Illuminate\Support\Str;

    use App\Models\tables\User;


    /**
     *
     */
    class PersonNameMigrator
    {
        public function __construct()
        {

        }



        // Variables
        private static ?PersonNameMigrator $singleton =  null;

        /**
         * @return PersonNameMigrator|null
         */
        public static function getSingleton(): ?PersonNameMigrator
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton( new PersonNameMigrator() );
            }

            return self::$singleton;
        }

        /**
         * @param PersonNameMigrator|null $singleton
         */
        public static function setSingleton( ?PersonNameMigrator $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>