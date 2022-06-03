<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables;

    // External libraries
use Database\Factories\tables\testing\TestingCountryModelFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\CountryModel;


    /**
     *
     */
    class CountryModelFactory
        extends Factory
    {
        // Variables
        protected $model        = CountryModel::class;
        private static $debug   = false;


        private static ?TestingCountryModelFactory $testingFactory = null;

        /**
         * @return TestingCountryModelFactory
         */
        public static final function getTestingFactory(): TestingCountryModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory(new TestingCountryModelFactory());
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingCountryModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingCountryModelFactory $fakeFactory )
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
         * @return array|mixed[]|null[]
         */
        public final function definition(): array
        {
            if($this->getDebugState())
            {
                return self::getTestingFactory()->definition();
            }
            else
            {
                return
                    [
                        'country_name'    => null,
                        'country_acronym' => null
                    ];
            }
        }
    }
?>
