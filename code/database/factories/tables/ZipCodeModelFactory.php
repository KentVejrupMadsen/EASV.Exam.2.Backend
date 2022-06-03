<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables;

    // External libraries
    use Database\Factories\tables\testing\TestingZipCodeModelFactory;
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\ZipCodeModel;


    /**
     *
     */
    class ZipCodeModelFactory
        extends Factory
    {
        // Variables
        protected $model        = ZipCodeModel::class;
        private static $debug   = false;


        private static ?TestingZipCodeModelFactory $testingFactory = null;

        /**
         * @return TestingZipCodeModelFactory
         */
        public static final function getTestingFactory(): TestingZipCodeModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory(new TestingZipCodeModelFactory());
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingZipCodeModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingZipCodeModelFactory $fakeFactory )
        {
            self::$testingFactory = $fakeFactory;
        }

        // Accessors
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
                return self::getTestingFactory()->definition();
            }
            else
            {
                return
                [
                    'area_name'  => null,
                    'zip_number' => 0,
                    'country_id' => 0
                ];
            }
        }
    }
?>