<?php
    namespace Database\Factories\tables;

    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class NewsletterFactory
        extends Factory
    {
        protected $model = NewsletterFactory::class;
        private static $debug = false;

        public final function getDebugState(): bool
        {
            return self::$debug;
        }

        public final function setDebugState( bool $value ): void
        {
            self::$debug = $value;
        }

        /**
         * @return array
         */
        public function definition(): array
        {
            return
            [
                //
                'email_id' => 1,
                'options' => '{ }'
            ];
        }
    }
?>