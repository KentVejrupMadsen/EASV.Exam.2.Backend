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
    use App\Models\tables\BoardTitleModel;
    use Database\Factories\templates\FactoryTemplate;
    use Database\Factories\tables\testing\TestingBoardTitleModelFactory;


    /**
     *
     */
    class BoardTitleModelFactory
        extends FactoryTemplate
    {
        // Variables
        private static $debug   = false;
        protected $model        = BoardTitleModel::class;


        private static ?TestingBoardTitleModelFactory $testingFactory = null;

        /**
         * @return TestingBoardTitleModelFactory
         */
        public static final function getTestingFactory(): TestingBoardTitleModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingBoardTitleModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingBoardTitleModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingBoardTitleModelFactory $fakeFactory ): void
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


        protected function TestDefinition(): array
        {

            return self::getTestingFactory()->definition();
        }

        protected final function DefaultDefinition(): array
        {

            return
                [
                    'content' => null
                ];
        }
    }
?>