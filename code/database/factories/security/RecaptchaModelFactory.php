<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\security;

    // External libraries
    use Carbon\Carbon;
    use Database\Factories\security\testing\TestingRecaptchaModelFactory;
    use Database\Factories\templates\FactoryTemplate;

    // Internal libraries
    use App\Models\security\RecaptchaModel;


    /**
     *
     */
    class RecaptchaModelFactory
        extends FactoryTemplate
    {
        // Variables
        protected $model        = RecaptchaModel::class;
        private static $debug   = false;
        private static ?TestingRecaptchaModelFactory $testingFactory = null;

        /**
         * @return TestingRecaptchaModelFactory
         */
        public static final function getTestingFactory(): TestingRecaptchaModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingRecaptchaModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingRecaptchaModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingRecaptchaModelFactory $fakeFactory ): void
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
        protected final function TestDefinition(): array
        {
            return self::getTestingFactory()->definition();
        }


        /**
         * @return array
         */
        protected final function DefaultDefinition(): array
        {
            return
                [
                    //
                    RecaptchaModel::field_success  => false,
                    RecaptchaModel::field_score    => 0.0,
                    RecaptchaModel::field_at_date  => Carbon::now(),
                    RecaptchaModel::field_hostname => null,
                    RecaptchaModel::field_error    => null
                ];
        }
    }
?>