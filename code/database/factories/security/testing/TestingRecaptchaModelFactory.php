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

    // Internal libraries
    use App\Models\security\RecaptchaModel;


    /**
     *
     */
    class TestingRecaptchaModelFactory
        extends Factory
    {
        // Variables
        protected $model        = RecaptchaModel::class;


        //
        /**
         * @return array|mixed[]
         */
        public final function definition(): array
        {
            return
            [
                    //
                'success'  => $this->faker->boolean,
                'score'    => $this->faker->randomFloat(1, 0, 1),
                'at_date'  => $this->faker->time,
                'hostname' => $this->faker->unique()->domainName,
                'error'    => $this->faker->text(50)
            ];
        }
    }
?>