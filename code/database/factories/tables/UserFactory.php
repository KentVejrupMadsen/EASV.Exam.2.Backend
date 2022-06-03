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


        private static ?TestingConfigurationModelFactory $testingFactory = null;

        public static final function getTestingFactory(): TestingConfigurationModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory(new TestingConfigurationModelFactory());
            }

            return self::$testingFactory;
        }

        public static final function setTestingFactory( TestingConfigurationModelFactory $fakeFactory )
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
                return
                [
                    'username'          => $this->faker
                                                ->unique()
                                                ->userName,

                    'email_id'          => 0,
                    'email_verified_at' => $this->fakeIsVerified(),

                    'password'          => $this->generatePassword(),

                    'created_at'        => $this->faker
                                                ->dateTime,

                    'updated_at'        => $this->faker
                                                ->dateTime,
                    'settings' => '{ }'
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

                    'settings' => '{ }'
                ];
            }
        }

    }
?>