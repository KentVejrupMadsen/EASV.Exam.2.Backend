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
                    'content' => null
                ];
            }
        }
    }
?>