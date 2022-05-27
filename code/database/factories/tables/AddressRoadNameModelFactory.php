<?php
    namespace Database\Factories\tables;

    use App\Models\tables\AddressRoadNameModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class AddressRoadNameModelFactory
        extends Factory
    {
        protected $model = AddressRoadNameModel::class;

        /**
         * @return array
         */
        public final function definition(): array
        {
            return
            [
                //
                'content' => $this->faker
                                  ->streetName
            ];
        }
    }
?>
