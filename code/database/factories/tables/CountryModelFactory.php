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
