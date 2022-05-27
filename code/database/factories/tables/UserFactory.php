<?php
    namespace Database\Factories\tables;

    use App\Models\tables\User;
    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class UserFactory
        extends Factory
    {
        // Variables
        protected $model = User::class;
        private static $debug = false;

        public final function getDebugState(): bool
        {
            return self::$debug;
        }

        public final function setDebugState( bool $value ): void
        {
            self::$debug = $value;
        }


        /**
         * @return array
         */
        public final function definition(): array
        {
            return
            [
                'username' => '',

                'email_id' => 0,

                'email_verified_at' => null,

                'password'   => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

    }
?>