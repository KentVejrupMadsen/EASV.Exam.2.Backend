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
    use App\Models\tables\AddressModel;
    use Illuminate\Support\Str;


    /**
     *
     */
    class TestingAddressModelFactory
        extends Factory
    {
        // Variables
        protected $model        = AddressModel::class;



        //
        /**
         * @return array|mixed[]
         */
        public final function definition(): array
        {
            return
                [
                    //
                    'account_information_id' => 0,
                    'road_name_id'           => 0,

                    'road_number' => $this->faker
                        ->randomDigit(),

                    'levels' => Str::random(3),

                    'country_id'  => 0,
                    'zip_code_id' => 0
                ];
        }
    }
?>