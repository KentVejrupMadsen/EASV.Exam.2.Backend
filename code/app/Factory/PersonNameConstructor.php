<?php
    namespace App\Factory;

    use Carbon\Carbon;
    use Illuminate\Support\Str;

    use App\Models\tables\User;


    /**
     *
     */
    class PersonNameConstructor
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

        private static ?PersonNameConstructor $singleton =  null;

        /**
         * @return PersonNameConstructor|null
         */
        public static function getSingleton(): ?PersonNameConstructor
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton( new PersonNameConstructor() );
            }

            return self::$singleton;
        }

        /**
         * @param PersonNameConstructor|null $singleton
         */
        public static function setSingleton( ?PersonNameConstructor $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>