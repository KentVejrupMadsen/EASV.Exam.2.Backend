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
    use Database\Factories\tables\testing\TestingBoardModelFactory;
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\BoardModel;


    /**
     *
     */
    class BoardModelFactory
        extends Factory
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
        public static final function setTestingFactory( TestingBoardModelFactory $fakeFactory )
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
                    'kanban_id'      => 0,
                    'board_title_id' => 0,
                    'body'           => null,
                    'created_at'     => Carbon::now(),
                    'updated_at'     => Carbon::now()
                ];
            }
        }
    }
?>