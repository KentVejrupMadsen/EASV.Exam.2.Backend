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
         * @return array
         */
        public final function definition(): array
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