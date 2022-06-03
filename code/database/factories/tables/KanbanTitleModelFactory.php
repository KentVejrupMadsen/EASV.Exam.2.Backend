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
    use App\Models\tables\KanbanTitleModel;
    use Database\Factories\templates\FactoryTemplate;
    use Database\Factories\tables\testing\TestingKanbanTitleModelFactory;


    /**
     *
     */
    class KanbanTitleModelFactory
        extends FactoryTemplate
    {
        // Variables
        protected $model        = KanbanTitleModel::class;
        private static $debug   = false;

        private static ?TestingKanbanTitleModelFactory $testingFactory = null;


        // Accessor
        /**
         * @return TestingKanbanTitleModelFactory
         */
        public static final function getTestingFactory(): TestingKanbanTitleModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingKanbanTitleModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingKanbanTitleModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingKanbanTitleModelFactory $fakeFactory ): void
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


        // Definition
        /**
         * @return array
         */
        protected final function TestDefinition(): array
        {
            return self::getTestingFactory()->definition();
        }


        /**
         * @return null[]
         */
        protected final function DefaultDefinition(): array
        {
            return
            [
                KanbanTitleModel::field_content => null
            ];
        }
    }
?>