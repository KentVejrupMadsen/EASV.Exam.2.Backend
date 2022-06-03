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
    use App\Models\tables\TaskModel;
    use Database\Factories\templates\FactoryTemplate;
    use Database\Factories\tables\testing\TestingTaskModelFactory;


    /**
     *
     */
    class TaskModelFactory
        extends FactoryTemplate
    {
        // Variables
        protected $model = TaskModel::class;
        private static $debug = false;


        private static ?TestingTaskModelFactory $testingFactory = null;

        /**
         * @return TestingTaskModelFactory
         */
        public static final function getTestingFactory(): TestingTaskModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingTaskModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingTaskModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingTaskModelFactory $fakeFactory ): void
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

        //
        /**
         * @return array
         */
        public function definition(): array
        {
            if( $this->getDebugState() )
            {
                return self::getTestingFactory()->definition();
            }
            else
            {
                return
                    [
                        'board_id' => 0,
                        'content'  => null
                    ];
            }
        }
    }
?>