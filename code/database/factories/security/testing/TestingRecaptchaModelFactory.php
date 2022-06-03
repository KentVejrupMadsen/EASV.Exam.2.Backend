<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\security\testing;

    // External libraries
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


        /**
         * @return array|mixed[]
         */
        public final function definition(): array
        {
            return
            [
                    //
                RecaptchaModel::field_success  => $this->faker->boolean,
                RecaptchaModel::field_score => $this->faker->randomFloat(1, 0, 1),
                RecaptchaModel::field_at_date  => $this->faker->time,
                RecaptchaModel::field_hostname => $this->faker->unique()->domainName,
                RecaptchaModel::field_error    => $this->faker->text(50)
            ];
        }
    }
?>