<?php
    namespace App\Migrator;

    use App\Models\tables\AccountEmailModel;
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

        public final function retrieveEmail( string $email ): ?AccountEmailModel
        {
            $model = AccountEmailModel::where( 'content', $email )->first();
            return $model;
        }


        public final function hasEmailContainer( string $email ): ?bool
        {
            $retVal = false;

            $model = AccountEmailModel::where( 'content', $email )->first();

            if( isset( $model ) )
            {
                $retVal = true;
            }

            return $retVal;
        }

        public final function createEmail( string $email ): ?AccountEmailModel
        {
            return AccountEmailModel::factory()->create( [ 'content' => $email ] );
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