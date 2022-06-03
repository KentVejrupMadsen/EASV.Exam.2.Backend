<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables;

    // External libraries
use Database\Factories\tables\testing\TestingPersonNameModelFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\PersonNameModel;


    /**
     *
     */
    class PersonNameModelFactory
        extends Factory
    {
        // Variables
        protected $model        = PersonNameModel::class;
        private static $debug   = false;


        private static ?TestingPersonNameModelFactory $testingFactory = null;

        /**
         * @return TestingPersonNameModelFactory
         */
        public static final function getTestingFactory(): TestingPersonNameModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory(new TestingPersonNameModelFactory());
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingPersonNameModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingPersonNameModelFactory $fakeFactory )
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
                        'account_information_id'    => 0,
                        'person_name_first_id'      => 0,
                        'person_name_lastname_id'   => 0,
                        'person_name_middlename'    => '{ }'
                    ];
            }
        }
    }
?>
