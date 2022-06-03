<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables;

    // External libraries
use Database\Factories\tables\testing\TestingProjectTitleModelFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\ProjectTitleModel;


    /**
     *
     */
    class ProjectTitleModelFactory
        extends Factory
    {
        // Variables
        protected $model      = ProjectTitleModel::class;
        private static $debug = false;


        private static ?TestingProjectTitleModelFactory $testingFactory = null;

        /**
         * @return TestingProjectTitleModelFactory
         */
        public static final function getTestingFactory(): TestingProjectTitleModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingProjectTitleModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingProjectTitleModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingProjectTitleModelFactory $fakeFactory ): void
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
                        'content' => null
                    ];
            };
        }
    }
?>
