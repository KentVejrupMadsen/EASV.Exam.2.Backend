<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables;

    // External libraries
    use Illuminate\Support\Str;

    // Internal libraries
    use App\Models\tables\AddressModel;
    use Database\Factories\templates\FactoryTemplate;
    use Database\Factories\tables\testing\TestingAddressModelFactory;


    /**
     *
     */
    class AddressModelFactory
        extends FactoryTemplate
    {
        // Variables
        protected $model        = AddressModel::class;
        private static $debug   = false;


        private static ?TestingAddressModelFactory $testingFactory = null;

        /**
         * @return TestingAddressModelFactory
         */
        public static final function getTestingFactory(): TestingAddressModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingAddressModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingAddressModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingAddressModelFactory $fakeFactory ): void
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
                    'account_information_id' => 0,
                    'road_name_id'           => 0,
                    'road_number'            => 0,
                    'levels'                 => 'UNKN',
                    'country_id'             => 0,
                    'zip_code_id'            => 0
                ];
            }
        }
    }
?>