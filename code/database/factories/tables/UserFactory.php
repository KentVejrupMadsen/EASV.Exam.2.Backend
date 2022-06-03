<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables;

    // External libraries
    use Carbon\Carbon;
    use Database\Factories\tables\testing\TestingUserFactory;
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\User;
    use Illuminate\Support\Facades\Hash;


    /**
     *
     */
    class UserFactory
        extends Factory
    {
        // Variables
        protected $model        = User::class;
        private static $debug   = false;


        private static ?TestingUserFactory $testingFactory = null;

        /**
         * @return TestingUserFactory
         */
        public static final function getTestingFactory(): TestingUserFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory(new TestingUserFactory());
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingUserFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingUserFactory $fakeFactory )
        {
            self::$testingFactory = $fakeFactory;
        }

        // Accessor
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

        protected function generatePassword(): ?string
        {
            if( $this->getDebugState() )
            {
                return Hash::make( $this->faker->realTextBetween( 8, 16 ) );
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
                return self::getTestingFactory()->definition();
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

                    'settings' => '{ }'
                ];
            }
        }

    }
?>