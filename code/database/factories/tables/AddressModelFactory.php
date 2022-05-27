<?php
    namespace Database\Factories\tables;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\AddressModel;


    /**
     *
     */
    final class AddressModelFactory
        extends Factory
    {
        // Variables
        protected $model = AddressModel::class;
        private static $debug = false;


        // Accessor
        /**
         * @return bool
         */
        public final function getDebugState(): bool
        {
            return self::$debug;
        }

        /**
         * @param bool $value
         * @return void
         */
        public final function setDebugState( bool $value ): void
        {
            self::$debug = $value;
        }


        //
        /**
         * @return array
         */
        public final function definition(): array
        {
            if( $this->getDebugState() )
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
            else
            {
                return
                    [
                        //
                        'account_information_id' => 0,
                        'road_name_id' => 0,
                        'road_number' => 0,
                        'levels' => 0,
                        'country_id' => 0,
                        'zip_code_id' => 0
                    ];
            }
        }
    }
?>