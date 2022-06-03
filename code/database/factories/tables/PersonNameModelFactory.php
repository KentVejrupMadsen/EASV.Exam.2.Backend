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
    use App\Models\tables\PersonNameModel;
    use Database\Factories\templates\FactoryTemplate;
    use Database\Factories\tables\testing\TestingPersonNameModelFactory;


    /**
     *
     */
    class PersonNameModelFactory
        extends FactoryTemplate
    {
        // Variables
        protected $model        = PersonNameModel::class;
        private static $debug   = false;

        private static ?TestingPersonNameModelFactory $testingFactory = null;

        // Accessors
        /**
         * @return TestingPersonNameModelFactory
         */
        public static final function getTestingFactory(): TestingPersonNameModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingPersonNameModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingPersonNameModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingPersonNameModelFactory $fakeFactory ): void
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


        // Definition
        /**
         * @return array
         */
        protected final function DefaultDefinition(): array
        {
            return
            [
                PersonNameModel::field_account_information_id    => 0,
                PersonNameModel::field_person_name_first_id      => 0,
                PersonNameModel::field_person_name_lastname_id   => 0,
                PersonNameModel::field_person_name_middlename    => ''
            ];
        }


        /**
         * @return array
         */
        protected final function TestDefinition(): array
        {

            return self::getTestingFactory()->definition();
        }
    }
?>
