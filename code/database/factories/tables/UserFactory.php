<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace Database\Factories\tables;

    // External libraries
    use Carbon\Carbon;

    // Internal libraries
    use App\Models\tables\User;
    use Illuminate\Support\Facades\Hash;
    use Database\Factories\tables\testing\TestingUserFactory;
    use Database\Factories\templates\FactoryTemplate;


    /**
     *
     */
    class UserFactory
        extends FactoryTemplate
    {
        // Variables
        protected $model        = User::class;
        private static $debug   = false;

        private static ?TestingUserFactory $testingFactory = null;


        // Accessor
        /**
         * @return TestingUserFactory
         */
        public static final function getTestingFactory(): TestingUserFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingUserFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingUserFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingUserFactory $fakeFactory ): void
        {
            self::$testingFactory = $fakeFactory;
        }

        // Accessor
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
        protected final function DefaultDefinition(): array
        {
            return
            [
                User::field_username => null,

                User::field_email_id    => 0,
                User::field_verified_at => null,

                User::field_password    => null,

                User::field_created_at  => Carbon::now(),
                User::field_updated_at  => Carbon::now(),
                User::field_settings    => '{ }'
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
