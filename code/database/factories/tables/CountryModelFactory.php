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
        protected $model = CountryModel::class;
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
                'country_name' => $this->faker
                                       ->unique()
                                       ->country,

                'country_acronym' => $this->faker
                                          ->unique()
                                          ->countryCode
            ];
        }
    }
?>
