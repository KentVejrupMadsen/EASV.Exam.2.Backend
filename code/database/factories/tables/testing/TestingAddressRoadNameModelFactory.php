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
    use App\Models\tables\AddressRoadNameModel;


    /**
     *
     */
    class TestingAddressRoadNameModelFactory
        extends Factory
    {
        // Variables
        protected $model        = AddressRoadNameModel::class;


        /**
         * @return array
         */
        public final function definition(): array
        {
            return
            [
                AddressRoadNameModel::field_content => $this->faker->unique()->streetName
            ];
        }
    }
?>
