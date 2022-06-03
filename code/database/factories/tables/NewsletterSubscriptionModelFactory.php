<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables;

    // External libraries
    use Database\Factories\tables\testing\TestingNewsletterSubscriptionModelFactory;
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\NewsletterSubscriptionModel;


    /**
     *
     */
    class NewsletterSubscriptionModelFactory
        extends Factory
    {

        // Variables
        protected $model        = NewsletterSubscriptionModel::class;
        private static $debug   = false;


        private static ?TestingNewsletterSubscriptionModelFactory $testingFactory = null;

        /**
         * @return TestingNewsletterSubscriptionModelFactory
         */
        public static final function getTestingFactory(): TestingNewsletterSubscriptionModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingNewsletterSubscriptionModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingNewsletterSubscriptionModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingNewsletterSubscriptionModelFactory $fakeFactory ): void
        {
            self::$testingFactory = $fakeFactory;
        }

        // Access
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
                        //
                        'email_id' => 0,
                        'options' => null
                    ];
            }
        }
    }
?>