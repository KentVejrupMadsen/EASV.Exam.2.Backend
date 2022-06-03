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
    use App\Models\tables\CountryModel;


    /**
     *
     */
    class TestingCountryModelFactory
        extends Factory
    {
        // Variables
        protected $model        = CountryModel::class;



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
