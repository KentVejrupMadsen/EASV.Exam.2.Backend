<?php
    namespace Database\Factories\tables;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\ZipCodeModel;


    /**
     *
     */
    final class ZipCodeModelFactory
        extends Factory
    {
        // Variables
        protected $model        = ZipCodeModel::class;
        private static $debug   = false;


        // Accessors
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


        /**
         * @return array
         */
        public final function definition(): array
        {
            if( $this->getDebugState() )
            {
                return
                [
                    'area_name' => $this->faker
                                        ->unique()
                                        ->city,
                    'zip_number' => $this->faker
                                         ->unique()
                                         ->numerify,
                    'country_id' => 0
                ];
            }
            else
            {
                return
                [
                    'area_name'  => null,
                    'zip_number' => 0,
                    'country_id' => 0
                ];
            }
        }
    }
?>