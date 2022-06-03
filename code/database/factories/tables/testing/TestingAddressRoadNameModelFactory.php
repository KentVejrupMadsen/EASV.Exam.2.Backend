<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
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
                'content' => $this->faker->unique()->streetName
            ];
        }
    }
?>
