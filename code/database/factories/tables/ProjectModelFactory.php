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

    // Internal libraries
    use App\Models\tables\ProjectModel;
    use Database\Factories\tables\testing\TestingProjectModelFactory;
    use Database\Factories\templates\FactoryTemplate;


    /**
     *
     */
    class ProjectModelFactory
        extends FactoryTemplate
    {
        // Variables
        protected $model      = ProjectModel::class;
        private static $debug = false;

        private static ?TestingProjectModelFactory $testingFactory = null;

        // Accessor
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


        // Definition
        /**
         * @return array
         */
        protected final function DefaultDefinition(): array
        {
            return
            [
                ProjectModel::field_account_owner_id => 0,
                ProjectModel::field_project_title_id => 0,

                ProjectModel::field_description => null,
                ProjectModel::field_tags => null,

                ProjectModel::field_created_at => Carbon::now(),
                ProjectModel::field_updated_at => Carbon::now()
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