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
    use Database\Factories\tables\testing\TestingAccountInformationModelFactory;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Database\Factories\templates\FactoryTemplate;

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


        private static ?TestingAccountInformationModelFactory $testingFactory = null;

        /**
         * @return TestingAccountInformationModelFactory
         */
        public static final function getTestingFactory(): TestingAccountInformationModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingAccountInformationModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingAccountInformationModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingAccountInformationModelFactory $fakeFactory ): void
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
            return self::getTestingFactory()->definition();
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