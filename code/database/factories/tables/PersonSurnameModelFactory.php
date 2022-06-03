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
    use App\Models\tables\PersonSurnameModel;
    use Database\Factories\tables\testing\TestingPersonSurnameModelFactory;
    use Database\Factories\templates\FactoryTemplate;


    /**
     *
     */
    class PersonSurnameModelFactory
        extends FactoryTemplate
    {
        // Variables
        protected $model        = PersonSurnameModel::class;
        private static $debug   = false;


        private static ?TestingPersonSurnameModelFactory $testingFactory = null;

        /**
         * @return TestingPersonSurnameModelFactory
         */
        public static final function getTestingFactory(): TestingPersonSurnameModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingPersonSurnameModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingPersonSurnameModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingPersonSurnameModelFactory $fakeFactory ): void
        {
            self::$testingFactory = $fakeFactory;
        }

        // Accessors
        public final function getDebugState(): bool
        {
            return self::$debug;
        }

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