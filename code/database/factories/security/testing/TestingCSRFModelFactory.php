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

    // External libraries
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Str;

    // Internal libraries
    use App\Models\security\CSRFModel;


    /**
     *
     */
    class TestingCSRFModelFactory
        extends Factory
    {
        // Variables
        protected $model = CSRFModel::class;


        //
        /**
         * @return array|mixed[]
         */
        public function definition(): array
        {
            return
                [
                    CSRFModel::field_assigned_to  => $this->faker->ipv4,
                    CSRFModel::field_secure_token => Str::random( 32 ),
                    CSRFModel::field_secret_token => Str::random( 32 ),
                    CSRFModel::field_issued       => $this->faker->time,
                    CSRFModel::field_accessed     => $this->faker->time,

                    CSRFModel::field_activated    => $this->faker->boolean,
                    CSRFModel::field_invalidated  => $this->faker->boolean
                ];
        }
    }
?>
