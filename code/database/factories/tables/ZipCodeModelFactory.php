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
    use App\Models\tables\ZipCodeModel;

    use Database\Factories\tables\testing\TestingZipCodeModelFactory;
    use Database\Factories\templates\FactoryTemplate;


    /**
     *
     */
    class ZipCodeModelFactory
        extends FactoryTemplate
    {
        // Variables
        protected $model = ZipCodeModel::class;
        private static $debug = false;


        private static ?TestingZipCodeModelFactory $testingFactory = null;

        // Accessors
        /**
         * @return TestingZipCodeModelFactory
         */
        public static final function getTestingFactory(): TestingZipCodeModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingZipCodeModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingZipCodeModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingZipCodeModelFactory $fakeFactory ): void
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

        //
        /**
         * @return array
         */
        protected final function DefaultDefinition(): array
        {
            return
                [
                    ZipCodeModel::field_area_name=> null,
                    ZipCodeModel::field_zip_number => 0,
                    ZipCodeModel::field_country_id => 0
                ];
        }


        /**
         * @return array
         */
        protected final function TestDefinition(): array
        {
            return self::getTestingFactory()->definition();
        }
    }
?>
