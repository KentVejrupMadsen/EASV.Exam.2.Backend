<?php
    namespace Database\Factories\tables;

    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class NewsletterFactory
        extends Factory
    {
        // Variables
        protected $model = NewsletterFactory::class;
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