<?php
    namespace Database\Factories\security;

    use Illuminate\Database\Eloquent\Factories\Factory;


    final class ConfigurationModelFactory
        extends Factory
    {

        public function definition()
        {
            return
            [
                //
                'key' => $this->faker->text,
                'value' => $this->faker->text
            ];
        }
    }
?>