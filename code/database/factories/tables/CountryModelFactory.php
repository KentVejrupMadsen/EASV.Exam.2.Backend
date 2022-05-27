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
         * @return array|mixed[]
         */
        public final function definition()
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
