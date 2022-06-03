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
    use App\Models\tables\KanbanModel;
    use Database\Factories\tables\testing\TestingKanbanModelFactory;
    use Database\Factories\templates\FactoryTemplate;


    /**
     *
     */
    class KanbanModelFactory
        extends FactoryTemplate
    {
        // Variables
        private static $debug   = false;
        protected $model        = KanbanModel::class;

        private static ?TestingKanbanModelFactory $testingFactory = null;

        // Accessor
        /**
         * @return TestingKanbanModelFactory
         */
        public static final function getTestingFactory(): TestingKanbanModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingKanbanModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingKanbanModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingKanbanModelFactory $fakeFactory ): void
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
                    //
                    'kanban_title_id'   => 0,
                    'project_id'        => 0,
                    'created_at'        => Carbon::now(),
                    'updated_at'        => Carbon::now()
                ];
        }
    }
?>