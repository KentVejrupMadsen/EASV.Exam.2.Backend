<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables;

    // External libraries
    use Carbon\Carbon;

    // Internal libraries
    use App\Models\tables\BoardModel;
    use Database\Factories\tables\testing\TestingBoardModelFactory;
    use Database\Factories\templates\FactoryTemplate;


    /**
     *
     */
    class BoardModelFactory
        extends FactoryTemplate
    {
        // Variables
        protected $model        = BoardModel::class;
        private static $debug   = false;


        private static ?TestingBoardModelFactory $testingFactory = null;

        /**
         * @return TestingBoardModelFactory
         */
        public static final function getTestingFactory(): TestingBoardModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingBoardModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingBoardModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingBoardModelFactory $fakeFactory ): void
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
                    'kanban_id'      => 0,
                    'board_title_id' => 0,
                    'body'           => null,
                    'created_at'     => Carbon::now(),
                    'updated_at'     => Carbon::now()
                ];
        }
    }
?>