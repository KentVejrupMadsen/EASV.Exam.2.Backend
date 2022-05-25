<?php
    namespace Database\Factories\tables;

    use Illuminate\Database\Eloquent\Factories\Factory;

    /**
     * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
     */
    class ZipCodeModelFactory
        extends Factory
    {
        /**
         * @return string[]
         */
        public final function definition()
        {
            return
            [
                'area_name'=>$this->faker->postcode,
                'zip_number'=>$this->faker->numerify,
                'country_id'=>1
            ];
        }
    }
?>