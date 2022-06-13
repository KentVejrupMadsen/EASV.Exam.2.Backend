<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    namespace App\Http\Controllers\schemas\account\account\packages;

    use App\Models\tables\User;
    use App\Http\Controllers\templates\Builder;

    use Illuminate\Support\Facades\Hash;


    /**
     *
     */
    class AccountBuilder
        extends Builder
    {
        /**
         *
         */
        public function __construct()
        {
            parent::__construct();

        }

        // Variables
        private static ?AccountBuilder $singleton =  null;


        /**
         * @param array $form
         * @return User|null
         */
        public final function createAccountForm( array $form ): ?User
        {


            return $m;
        }


        /**
         * @param User $account
         * @return string
         */
        public final function issueBearerToken( User $account ): string
        {
            return '';
        }


        /**
         * @param int $id
         * @return bool
         */
        public final function validateEmailIsUsedWithId( int $id ): bool
        {
            return false;
        }

        /**
         * @param string $username
         * @return bool
         */
        public final function validateUsernameIsUsed( string $username ): bool
        {
            return false;
        }

        // Accessors
            // getters
        /**
         * @return AccountBuilder|null
         */
        public static function getSingleton(): ?AccountBuilder
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton( new AccountBuilder() );
            }

            return self::$singleton;
        }

            // setters
        /**
         * @param AccountBuilder|null $singleton
         */
        public static function setSingleton( ?AccountBuilder $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>