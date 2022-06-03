<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables\testing;

    // External libraries
    use Carbon\Carbon;
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
        protected $model      = ProjectModel::class;



        //
        /**
         * @return array
         */
        public final function definition(): array
        {
            return
                [
                    //
                    'account_owner_id' => 0,
                    'project_title_id' => 0,
                    'description' => $this->faker
                        ->realText,
                    'tags' => '{ }',
                    'created_at' => $this->faker
                        ->dateTime,
                    'updated_at' => $this->faker
                        ->dateTime
                ];
        }
    }
?>