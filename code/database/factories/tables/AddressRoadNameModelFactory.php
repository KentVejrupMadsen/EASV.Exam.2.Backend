<?php
    namespace Database\Factories\tables;

    use App\Models\tables\AddressRoadNameModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
     */
    class AddressRoadNameModelFactory
        extends Factory
    {
        protected $model = AddressRoadNameModel::class;

        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public final function definition()
        {
            return
            [
                //
                'content'=>$this->faker->streetName
            ];
        }
    }
?>
