<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace Database\Factories\tables;

    // External libraries

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


        private static ?TestingAddressModelFactory $testingFactory = null;

        public static final function getTestingFactory(): TestingAddressModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory(new TestingAddressModelFactory());
            }

            return self::$testingFactory;
        }

        public static final function setTestingFactory( TestingAddressModelFactory $fakeFactory )
        {
            self::$testingFactory = $fakeFactory;
        }

        // Accessor
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


        // Definitions
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
                    AddressModel::field_account_information_id => 0,
                    AddressModel::field_road_name_id           => 0,
                    AddressModel::field_road_number            => 0,
                    AddressModel::field_levels                 => 'UNKN',
                    AddressModel::field_country_id             => 0,
                    AddressModel::field_zip_code_id            => 0
            ];
        }
    }
?>
