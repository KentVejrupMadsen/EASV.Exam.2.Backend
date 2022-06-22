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
    use Carbon\Carbon;

    // Internal libraries
    use App\Models\tables\AccountInformationModel;
    use Database\Factories\tables\testing\TestingAccountInformationModelFactory;
    use Database\Factories\templates\FactoryTemplate;


    /**
     *
     */
    class AccountInformationModelFactory
        extends FactoryTemplate
    {
        protected $model        = AccountInformationModel::class;
        private static $debug   = false;

        private static ?TestingAccountInformationModelFactory $testingFactory = null;


        // Accessor
        /**
         * @return TestingAccountInformationModelFactory
         */
        public static final function getTestingFactory(): TestingAccountInformationModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingAccountInformationModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingAccountInformationModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingAccountInformationModelFactory $fakeFactory ): void
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
                AccountInformationModel::field_account => 0,
                AccountInformationModel::field_settings   => null,
                AccountInformationModel::field_created_at => Carbon::now(),
                AccountInformationModel::field_updated_at => Carbon::now()
            ];
        }
    }
?>
