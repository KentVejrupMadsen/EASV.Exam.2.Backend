<?php
    namespace Database\Factories\tables;

    use App\Models\tables\PersonFirstnameModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
     */
    class PersonFirstnameModelFactory
        extends Factory
    {
        protected $model = PersonFirstnameModel::class;

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
                'content' => $this->faker
                                  ->firstName
            ];
        }
    }
?>