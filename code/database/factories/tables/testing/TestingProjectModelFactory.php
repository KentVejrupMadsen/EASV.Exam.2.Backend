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
    use App\Models\tables\ProjectModel;


    /**
     *
     */
    class TestingProjectModelFactory
        extends Factory
    {
        // Variables
        protected $model = ProjectModel::class;


        /**
         * @return array
         */
        public final function definition(): array
        {
            return
            [
                ProjectModel::field_account_owner_id => 0,
                ProjectModel::field_project_title_id => 0,
                ProjectModel::field_description => $this->faker->realText,
                ProjectModel::field_tags => '',
                ProjectModel::field_created_at => $this->faker->dateTime,
                ProjectModel::field_updated_at => $this->faker->dateTime
            ];
        }
    }
?>