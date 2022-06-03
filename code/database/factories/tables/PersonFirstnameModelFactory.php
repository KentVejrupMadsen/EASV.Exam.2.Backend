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
    use App\Models\tables\PersonFirstnameModel;
    use Database\Factories\tables\testing\TestingPersonFirstnameModelFactory;
    use Database\Factories\templates\FactoryTemplate;


    /**
     *
     */
    class PersonFirstnameModelFactory
        extends FactoryTemplate
    {
        // Variables
        protected $model        = PersonFirstnameModel::class;
        private static $debug   = false;


        private static ?TestingPersonFirstnameModelFactory $testingFactory = null;

        /**
         * @return TestingPersonFirstnameModelFactory
         */
        public static final function getTestingFactory(): TestingPersonFirstnameModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingPersonFirstnameModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingPersonFirstnameModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingPersonFirstnameModelFactory $fakeFactory ): void
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


        protected function DefaultDefinition(): array
        {

            return
                [
                    //
                    'content' => null
                ];
        }

        protected function TestDefinition(): array
        {

            return self::getTestingFactory()->definition();
        }
    }
?>