<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables;

    // External libraries
use Database\Factories\tables\testing\TestingAddressRoadNameModelFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\AddressRoadNameModel;


    /**
     *
     */
    class AddressRoadNameModelFactory
        extends Factory
    {
        // Variables
        protected $model        = AddressRoadNameModel::class;
        private static $debug   = false;


        private static ?TestingAddressRoadNameModelFactory $testingFactory = null;

        /**
         * @return TestingAddressRoadNameModelFactory
         */
        public static final function getTestingFactory(): TestingAddressRoadNameModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingAddressRoadNameModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingAddressRoadNameModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingAddressRoadNameModelFactory $fakeFactory )
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
                return self::getTestingFactory()->definition();
            }
            else
            {
                return
                [
                    'content' => null
                ];
            }
        }
    }
?>
