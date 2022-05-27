<?php
    namespace Database\Factories\tables;

    use App\Models\tables\PersonNameModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class PersonNameModelFactory
        extends Factory
    {
        protected $model = PersonNameModel::class;


        /**
         * @return array
         */
        public final function definition(): array
        {
            return
            [
                //
                'account_information_id'    => 0,
                'person_name_first_id'      => 0,
                'person_name_lastname_id'   => 0,
                'person_name_middlename'    => 0
            ];
        }
    }
?>
