<?php
    namespace Database\Factories\tables;

    use App\Models\tables\ZipCodeModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class ZipCodeModelFactory
        extends Factory
    {
        protected $model = ZipCodeModel::class;

        /**
         * @return array
         */
        public final function definition(): array
        {
            return
            [
                'area_name' => $this->faker
                                    ->unique()
                                    ->city,

                'zip_number' => $this->faker
                                     ->unique()
                                     ->numerify,

                'country_id' => 1
            ];
        }
    }
?>