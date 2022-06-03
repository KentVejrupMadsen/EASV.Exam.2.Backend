<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\security\testing;

    // External libraries
    use Carbon\Carbon;

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
        protected $model        = CSRFModel::class;



        //
        /**
         * @return array|mixed[]
         */
        public function definition(): array
        {
            return
                [
                    'assigned_to'  => $this->faker->ipv4,
                    'secure_token' => Str::random( 32 ),
                    'secret_token' => Str::random( 32 ),

                    'issued'       => $this->faker->time,
                    'accessed'     => $this->faker->time,

                    'activated'    => $this->faker->boolean,
                    'invalidated'  => $this->faker->boolean
                ];
        }
    }
?>