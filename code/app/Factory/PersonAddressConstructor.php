<?php
    namespace App\Factory;

    use Carbon\Carbon;
    use Illuminate\Support\Str;

    use App\Models\tables\User;


    /**
     *
     */
    class PersonAddressConstructor
    {
        public function __construct()
        {

        }

        //
        public final function createAccountForm( array $form, string $password ): ?User
        {
            User::factory()->create();

            return null;
        }

        private static ?AccountConstructor $singleton =  null;

        /**
         * @return AccountConstructor|null
         */
        public static function getSingleton(): ?AccountConstructor
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton( new AccountConstructor() );
            }

            return self::$singleton;
        }

        /**
         * @param AccountConstructor|null $singleton
         */
        public static function setSingleton( ?AccountConstructor $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>