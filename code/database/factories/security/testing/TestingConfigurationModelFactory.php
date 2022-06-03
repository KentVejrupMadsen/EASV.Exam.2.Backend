<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
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