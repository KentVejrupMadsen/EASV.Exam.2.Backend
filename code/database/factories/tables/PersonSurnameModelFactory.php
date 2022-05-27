<?php
    namespace Database\Factories\tables;

    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class PersonSurnameModelFactory
        extends Factory
    {
        /**
         * @return array|mixed[]
         */
        public final function definition()
        {
            return
            [
                //
                'content' => $this->faker
                                  ->lastName
            ];
        }
    }
?>