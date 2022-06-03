<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables;

    // External libraries
    use Database\Factories\tables\testing\TestingPersonFirstnameModelFactory;
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\PersonFirstnameModel;


    /**
     *
     */
    class PersonFirstnameModelFactory
        extends Factory
    {
        // Variables
        protected $model        = PersonFirstnameModel::class;
        private static $debug   = false;


        private static ?TestingPersonFirstnameModelFactory $testingFactory = null;

        public static final function getTestingFactory(): TestingPersonFirstnameModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory(new TestingPersonFirstnameModelFactory());
            }

            return self::$testingFactory;
        }

        public static final function setTestingFactory( TestingPersonFirstnameModelFactory $fakeFactory )
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
                        'content' => null
                    ];
            }
        }
    }
?>