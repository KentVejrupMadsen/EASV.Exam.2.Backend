<?php
    namespace Database\Factories\tables;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\NewsletterSubscriptionModel;


    /**
     *
     */
    final class NewsletterSubscriptionModelFactory
        extends Factory
    {

        // Variables
        protected $model = NewsletterSubscriptionModel::class;
        private static $debug = false;

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
                return
                    [
                        //
                        'email_id' => 1,
                        'options' => '{ }'
                    ];
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