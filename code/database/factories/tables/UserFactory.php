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

        /**
         * @return bool
         */
        public final function getDebugState(): bool
        {
            return self::$debug;
        }

        /**
         * @param bool $value
         * @return void
         */
        public final function setDebugState( bool $value ): void
        {
            self::$debug = $value;
        }


        /**
         * @return \DateTime|null
         */
        protected function fakeIsVerified(): ?\DateTime
        {
            if( $this->faker->boolean )
            {
                return $this->faker->dateTime;
            }
            else
            {
                return null;
            }
        }


        /**
         * @return array
         */
        public final function definition(): array
        {
            if( $this->getDebugState() )
            {
                return
                [
                    'username'          => $this->faker->userName,
                    'email_id'          => 0,
                    'email_verified_at' => $this->fakeIsVerified(),
                    'password'          => '',
                    'created_at'        => $this->faker->dateTime,
                    'updated_at'        => $this->faker->dateTime,
                ];
            }
            else
            {
                return
                [
                    'username'          => null,
                    'email_id'          => 0,
                    'email_verified_at' => null,
                    'password'          => null,
                    'created_at'        => Carbon::now(),
                    'updated_at'        => Carbon::now(),
                ];
            }
        }

    }
?>