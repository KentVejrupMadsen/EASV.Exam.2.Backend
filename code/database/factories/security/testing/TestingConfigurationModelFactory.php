<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace Database\Factories\security\testing;

    // Internal libraries
    use App\Models\security\ConfigurationModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    class TestingConfigurationModelFactory
        extends Factory
    {
        // Variables
        protected $model        = ConfigurationModel::class;

        /**
         * @return array|mixed[]
         */
        public function definition(): array
        {
            return
            [
                ConfigurationModel::field_key   => $this->faker->text,
                ConfigurationModel::field_value => ''
            ];
        }
    }
?>
