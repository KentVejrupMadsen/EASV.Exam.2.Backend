<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace Database\Factories\tables\testing;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\CountryModel;


    /**
     *
     */
    class TestingCountryModelFactory
        extends Factory
    {
        // Variables
        protected $model        = CountryModel::class;



        /**
         * @return array|mixed[]|null[]
         */
        public final function definition(): array
        {
            return
            [
                CountryModel::field_country_name    => $this->faker->unique()->country,
                CountryModel::field_country_acronym => $this->faker->unique()->countryCode
            ];
        }
    }
?>
