<?php
    namespace Database\Factories\security;

    use Illuminate\Database\Eloquent\Factories\Factory;


    final class RecaptchaModelFactory
        extends Factory
    {
        public function definition()
        {
            return
            [
                //
                'success' => $this->faker->boolean,
                'score' => $this->faker->randomFloat(1, 0, 1),
                'at_date' => $this->faker->time,
                'hostname' => $this->faker->domainName,
                'error' => $this->faker->text
            ];
        }
    }
?>