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
    use App\Models\tables\KanbanModel;


    /**
     *
     */
    class TestingKanbanModelFactory
        extends Factory
    {
        // Variables
        protected $model        = KanbanModel::class;


        /**
         * @return array|mixed[]
         */
        public final function definition(): array
        {
            return
            [
                'kanban_title_id' => 0,
                'project_id' => 0,
                'created_at' => $this->faker->dateTime,
                'updated_at' => $this->faker->dateTime
            ];
        }
    }
?>