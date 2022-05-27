<?php
    namespace Database\Factories\tables;

    use App\Models\tables\AddressModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class AddressModelFactory
        extends Factory
    {
        protected $model = AddressModel::class;

        private static $debug = false;

        public final function getDebugState(): bool
        {
            return self::$debug;
        }

        public final function setDebugState( bool $value ): void
        {
            self::$debug = $value;
        }


        /**
         * @return array
         */
        public final function definition(): array
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