<?php
    namespace App\Migrator;

    use Carbon\Carbon;
    use Illuminate\Support\Str;

    use App\Models\tables\User;


    /**
     *
     */
    class PersonEmailMigrator
    {
        public function __construct()
        {

        }



        // Variables
        private static ?PersonEmailMigrator $singleton =  null;

        /**
         * @return PersonEmailMigrator|null
         */
        public static function getSingleton(): ?PersonEmailMigrator
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton( new PersonEmailMigrator() );
            }

            return self::$singleton;
        }

        /**
         * @param PersonEmailMigrator|null $singleton
         * @return void
         */
        public static function setSingleton( ?PersonEmailMigrator $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>