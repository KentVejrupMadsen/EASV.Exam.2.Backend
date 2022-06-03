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
    use Database\Factories\tables\testing\TestingKanbanModelFactory;
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\KanbanModel;


    /**
     *
     */
    class KanbanModelFactory
        extends Factory
    {
        // Variables
        private static $debug   = false;
        protected $model        = KanbanModel::class;

        private static ?TestingKanbanModelFactory $testingFactory = null;

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


        //
        /**
         * @return array|mixed[]
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
                        //
                        'kanban_title_id'   => 0,
                        'project_id'        => 0,
                        'created_at'        => Carbon::now(),
                        'updated_at'        => Carbon::now()
                    ];
            }
        }
    }
?>