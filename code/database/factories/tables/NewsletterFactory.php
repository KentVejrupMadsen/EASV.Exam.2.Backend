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
         * @return array|mixed[]
         */
        public function definition()
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