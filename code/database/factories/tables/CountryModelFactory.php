<?php
    namespace Database\Factories\tables;

    use App\Models\tables\CountryModel;

    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class CountryModelFactory
        extends Factory
    {
        // Variables
        protected $model = CountryModel::class;
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


        /**
         * @return array|mixed[]|null[]
         */
        public final function definition(): array
        {
            if($this->getDebugState())
            {
                return
                    [
                        'country_name' => $this->faker
                                               ->unique()
                                               ->country,

                        'country_acronym' => $this->faker
                                                  ->unique()
                                                  ->countryCode
                    ];
            }
            else
            {
                return
                    [
                        'country_name'    => null,
                        'country_acronym' => null
                    ];
            }
        }
    }
?>
