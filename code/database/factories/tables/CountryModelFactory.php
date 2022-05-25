<?php
    namespace Database\Factories\tables;

    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
     */
    class CountryModelFactory
        extends Factory
    {
        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public final function definition()
        {
            return
            [
                'country_name'=>$this->faker->country,
                'country_acronym'=>$this->faker->countryCode
            ];
        }
    }
?>
