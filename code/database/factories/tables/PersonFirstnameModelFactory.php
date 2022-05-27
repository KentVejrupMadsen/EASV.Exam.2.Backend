<?php
    namespace Database\Factories\tables;

    use App\Models\tables\PersonFirstnameModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class PersonFirstnameModelFactory
        extends Factory
    {
        protected $model = PersonFirstnameModel::class;

        /**
         * @return array
         */
        public final function definition(): array
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