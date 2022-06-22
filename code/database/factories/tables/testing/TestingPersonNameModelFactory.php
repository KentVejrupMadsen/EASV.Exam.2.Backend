<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace Database\Factories\tables\testing;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\PersonNameModel;


    /**
     *
     */
    class TestingPersonNameModelFactory
        extends Factory
    {
        // Variables
        protected $model = PersonNameModel::class;


        //
        /**
         * @return array
         */
        public final function definition(): array
        {
            return
            [
                PersonNameModel::field_account_information_id    => 0,
                PersonNameModel::field_person_name_first_id      => 0,
                PersonNameModel::field_person_name_lastname_id   => 0,
                PersonNameModel::field_person_name_middlename    => ''
            ];
        }
    }
?>
