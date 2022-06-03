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
    use Database\Factories\tables\testing\TestingProjectModelFactory;
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\ProjectModel;


    /**
     *
     */
    class ProjectModelFactory
        extends Factory
    {
        // Variables
        protected $model      = ProjectModel::class;
        private static $debug = false;


        private static ?TestingProjectModelFactory $testingFactory = null;

        /**
         * @return TestingProjectModelFactory
         */
        public static final function getTestingFactory(): TestingProjectModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingProjectModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingProjectModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingProjectModelFactory $fakeFactory ): void
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
        public final function definition(): array
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
                        'account_owner_id' => 0,
                        'project_title_id' => 0,
                        'description' => null,
                        'tags' => null,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ];
            }
        }
    }
?>