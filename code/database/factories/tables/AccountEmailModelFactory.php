<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables;

    // External libraries

    // Internal libraries
    use App\Models\tables\AccountEmailModel;
    use Database\Factories\templates\FactoryTemplate;
    use Database\Factories\tables\testing\TestingAccountEmailModelFactory;


    /**
     *
     */
    class AccountEmailModelFactory
        extends FactoryTemplate
    {
        protected $model = AccountEmailModel::class;
        private static $debug = false;

        private static ?TestingAccountEmailModelFactory $testingFactory = null;


        // Accessor
        /**
         * @return TestingAccountEmailModelFactory
         */
        public static final function getTestingFactory(): TestingAccountEmailModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingAccountEmailModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingAccountEmailModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingAccountEmailModelFactory $fakeFactory ): void
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
         * @return null[]
         */
        protected final function DefaultDefinition(): array
        {
            return
            [
                'content' => null
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