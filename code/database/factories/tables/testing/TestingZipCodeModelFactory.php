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
    use App\Models\tables\ZipCodeModel;


    /**
     *
     */
    class TestingZipCodeModelFactory
        extends Factory
    {
        // Variables
        protected $model        = ZipCodeModel::class;


        /**
         * @return array
         */
        public final function definition(): array
        {
            return
            [
                ZipCodeModel::field_area_name  => $this->faker->unique()->city,
                ZipCodeModel::field_zip_number => 0,
                ZipCodeModel::field_country_id => $this->faker->unique()->numerify
            ];
        }
    }
?>
