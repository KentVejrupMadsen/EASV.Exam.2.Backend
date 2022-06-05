<?php
    namespace App\Migrator;

    use Carbon\Carbon;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Str;

    use App\Models\tables\User;


    /**
     *
     */
    class AccountMigrator
    {
        public function __construct()
        {

        }

        // Variables
        private static ?AccountMigrator $singleton =  null;


        /**
         * @param array $form
         * @return User|null
         */
        public final function createAccountForm( array $form ): ?User
        {
            $m = User::factory()->create(
                [
                    User::field_username => $form[ 'username' ],
                    User::field_password => Hash::make( $form[ 'password' ] ),
                    User::field_email_id => $form[ 'email_id' ],
                    User::field_settings => []
                ]
            );

            return $m;
        }


        /**
         * @param User $account
         * @return string
         */
        public final function issueBearerToken( User $account ): string
        {
            return $account->createToken( 'account-migrator-issue-bearer-token' )->plainTextToken;
        }


        /**
         * @param int $id
         * @return bool
         */
        public final function validateEmailIsUsedWithId( int $id ): bool
        {
            $retVal = false;
            $m = User::where( User::field_email_id, $id )->first();

            if( isset( $m ) )
            {
                $retVal = true;
            }

            return $retVal;
        }

        /**
         * @param string $username
         * @return bool
         */
        public final function validateUsernameIsUsed( string $username ): bool
        {
            $retVal = false;
            $account = User::where('username', $username)->first();

            if( isset( $account ) )
            {
                $retVal = true;
            }

            return $retVal;
        }

        // Accessors
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