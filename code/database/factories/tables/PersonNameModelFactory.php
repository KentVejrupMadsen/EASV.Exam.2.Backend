<?php
    namespace Database\Factories\tables;

    use App\Models\tables\PersonNameModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
     */
    class PersonNameModelFactory
        extends Factory
    {
        protected $model = PersonNameModel::class;

        /**
         * @return array|mixed[]
         */
        public final function definition()
        {
            return
            [
                //
                'account_information_id',
                'person_name_first_id',
                'person_name_lastname_id',
                'person_name_middlename'
            ];
        }
    }
?>
