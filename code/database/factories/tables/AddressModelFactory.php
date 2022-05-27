<?php
    namespace Database\Factories\tables;

    use App\Models\tables\AddressModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    class AddressModelFactory
        extends Factory
    {
        protected $model = AddressModel::class;


        /**
         * @return array|mixed[]
         */
        public final function definition()
        {
            return
            [
                //
                'account_information_id' => 0,
                'road_name_id' => 0,

                'road_number' => $this->faker
                                      ->randomDigit(),

                'levels' => $this->faker
                                 ->text( 2 ),
                'country_id' => 0,
                'zip_code_id' => 0
            ];
        }
    }
?>