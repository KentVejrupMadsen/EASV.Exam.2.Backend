<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\BoardTitleModel;


    /**
     *
     */
    class BoardTitleModelFactory
        extends Factory
    {
        // Variables
        private static $debug   = false;
        protected $model        = BoardTitleModel::class;


        private static ?TestingConfigurationModelFactory $testingFactory = null;

        public static final function getTestingFactory(): TestingConfigurationModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory(new TestingConfigurationModelFactory());
            }

            return self::$testingFactory;
        }

        public static final function setTestingFactory( TestingConfigurationModelFactory $fakeFactory )
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
                        'content' => null
                    ];
            }
        }
    }
?>