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
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\security\RecaptchaModel;


    /**
     *
     */
    class RecaptchaModelFactory
        extends Factory
    {
        // Variables
        protected $model        = RecaptchaModel::class;
        private static $debug   = false;
        private static ?TestingRecaptchaModelFactory $testingFactory = null;

        public static final function getTestingFactory(): TestingRecaptchaModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingRecaptchaModelFactory() );
            }

            return self::$testingFactory;
        }

        public static final function setTestingFactory( TestingRecaptchaModelFactory $fakeFactory )
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
                        //
                    'success'  => false,
                    'score'    => 0.0,
                    'at_date'  => Carbon::now(),
                    'hostname' => null,
                    'error'    => null
                ];
            }
        }
    }
?>