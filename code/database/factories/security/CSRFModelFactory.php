<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace Database\Factories\security;

    // External libraries
    use Carbon\Carbon;

    use Database\Factories\security\testing\TestingCSRFModelFactory;
    use Database\Factories\templates\FactoryTemplate;
    use Illuminate\Support\Str;

    // Internal libraries
    use App\Models\security\CSRFModel;


    /**
     *
     */
    class CSRFModelFactory
        extends FactoryTemplate
    {
        // Variables
        protected $model        = CSRFModel::class;
        private static $debug   = false;

        private static ?TestingCSRFModelFactory $testingFactory = null;

        /**
         * @return TestingCSRFModelFactory
         */
        public static final function getTestingFactory(): TestingCSRFModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingCSRFModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingCSRFModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingCSRFModelFactory $fakeFactory ): void
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
            return $this::getTestingFactory()->definition();
        }

        /**
         * @return array
         */
        protected final function DefaultDefinition(): array
        {
            return
            [
                CSRFModel::field_assigned_to  => null,
                CSRFModel::field_secure_token => Str::random( 32 ),
                CSRFModel::field_secret_token => Str::random( 32 ),
                CSRFModel::field_issued       => Carbon::now(),
                CSRFModel::field_accessed     => null,
                CSRFModel::field_activated    => false,
                CSRFModel::field_invalidated  => false
            ];
        }
    }
?>
