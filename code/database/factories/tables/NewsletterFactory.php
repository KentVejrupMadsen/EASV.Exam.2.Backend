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