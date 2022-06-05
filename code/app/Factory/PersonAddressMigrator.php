<?php
    namespace App\Migrator;

    use Carbon\Carbon;
    use Illuminate\Support\Str;

    use App\Models\tables\User;


    /**
     *
     */
    class PersonAddressMigrator
    {
        public function __construct()
        {

        }

        // Variables
        private static ?AccountMigrator $singleton =  null;

        /**
         * @return AccountMigrator|null
         */
        public static function getSingleton(): ?AccountMigrator
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton( new AccountMigrator() );
            }

            return self::$singleton;
        }

        /**
         * @param AccountMigrator|null $singleton
         */
        public static function setSingleton( ?AccountMigrator $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>