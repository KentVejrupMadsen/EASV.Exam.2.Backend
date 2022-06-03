<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables;

    // External libraries
    use Database\Factories\tables\testing\TestingKanbanTitleModelFactory;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Database\Factories\templates\FactoryTemplate;

    // Internal libraries
    use App\Models\tables\KanbanTitleModel;


    /**
     *
     */
    class KanbanTitleModelFactory
        extends Factory
    {
        // Variables
        protected $model        = KanbanTitleModel::class;
        private static $debug   = false;


        private static ?TestingKanbanTitleModelFactory $testingFactory = null;

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

        // Accessor
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
         * @return array|mixed[]
         */
        public function definition(): array
        {
            if($this->getDebugState())
            {
                return self::getTestingFactory()->definition();
            }
            else
            {
                return
                    [
                        'content'=> null
                    ];
            }
        }
    }
?>