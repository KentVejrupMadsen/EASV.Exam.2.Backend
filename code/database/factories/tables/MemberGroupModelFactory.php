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
    use App\Models\tables\MemberGroupModel;
    use Database\Factories\tables\testing\TestingMemberGroupModelFactory;
    use Database\Factories\templates\FactoryTemplate;

    /**
     *
     */
    class MemberGroupModelFactory
        extends FactoryTemplate
    {
        // Variables
        protected $model        = MemberGroupModel::class;
        private static $debug   = false;

        private static ?TestingMemberGroupModelFactory $testingFactory = null;


        private static ?TestingMemberGroupModelFactory $testingFactory = null;

        public static final function getTestingFactory(): TestingMemberGroupModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory(new TestingMemberGroupModelFactory());
            }

            return self::$testingFactory;
        }

        public static final function setTestingFactory( TestingMemberGroupModelFactory $fakeFactory )
        {
            self::$testingFactory = $fakeFactory;
        }

        // Accessors
        /**
         * @return TestingMemberGroupModelFactory
         */
        public static final function getTestingFactory(): TestingMemberGroupModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingMemberGroupModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingMemberGroupModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingMemberGroupModelFactory $fakeFactory ): void
        {
            self::$testingFactory = $fakeFactory;
        }

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

        // Definitions
        /**
         * @return array
         */
        protected final function TestDefinition(): array
        {
            return self::getTestingFactory()->definition();
        }


        /**
         * @return null[]
         */
        protected final function DefaultDefinition(): array
        {
            return
            [
                MemberGroupModel::field_content => null
            ];
        }
    }
?>