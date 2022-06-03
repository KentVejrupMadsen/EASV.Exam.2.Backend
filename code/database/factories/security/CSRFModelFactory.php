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


        //
        /**
         * @return array|mixed[]
         */
        public function definition(): array
        {
            if( $this->getDebugState() )
            {
                return $this::getTestingFactory()->definition();
            }
            else
            {
                return
                [
                    'assigned_to'  => null,
                    'secure_token' => Str::random( 32 ),
                    'secret_token' => Str::random( 32 ),
                    'issued'       => Carbon::now(),
                    'accessed'     => null,
                    'activated'    => false,
                    'invalidated'  => false
                ];
            }
        }
    }
?>