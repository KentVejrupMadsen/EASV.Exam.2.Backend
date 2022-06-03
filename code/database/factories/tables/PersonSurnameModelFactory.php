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
    use App\Models\tables\PersonSurnameModel;
    use Database\Factories\tables\testing\TestingPersonSurnameModelFactory;
    use Database\Factories\templates\FactoryTemplate;


    /**
     *
     */
    class PersonSurnameModelFactory
        extends FactoryTemplate
    {
        // Variables
        protected $model        = PersonSurnameModel::class;
        private static $debug   = false;

        private static ?TestingPersonSurnameModelFactory $testingFactory = null;

        private static ?TestingPersonSurnameModelFactory $testingFactory = null;

        public static final function getTestingFactory(): TestingPersonSurnameModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory(new TestingPersonSurnameModelFactory());
            }

            return self::$testingFactory;
        }

        public static final function setTestingFactory( TestingPersonSurnameModelFactory $fakeFactory )
        {
            self::$testingFactory = $fakeFactory;
        }

        // Accessors
        /**
         * @return TestingPersonSurnameModelFactory
         */
        public static final function getTestingFactory(): TestingPersonSurnameModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingPersonSurnameModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingPersonSurnameModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingPersonSurnameModelFactory $fakeFactory ): void
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
                    //
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