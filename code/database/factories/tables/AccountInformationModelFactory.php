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
    use App\Models\tables\AccountInformationModel;


    /**
     *
     */
    class AccountInformationModelFactory
        extends Factory
    {
        protected $model        = AccountInformationModel::class;
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
         * @return array
         */
        public final function definition(): array
        {
            if( $this->getDebugState() )
            {
                return $this->fakeDefinition();
            }
            else
            {
                return $this->normalDefinition();
            }
        }


        /**
         * @return array
         */
        protected function fakeDefinition(): array
        {
            return
            [
                'account_id' => 0,
                'settings'   => '{ }',
                'created_at' => $this->faker->dateTime,
                'updated_at' => $this->faker->dateTime
            ];
        }


        /**
         * @return array
         */
        protected function normalDefinition(): array
        {
            return
            [
                'account_id' => 0,
                'settings'   => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
        }
    }
?>