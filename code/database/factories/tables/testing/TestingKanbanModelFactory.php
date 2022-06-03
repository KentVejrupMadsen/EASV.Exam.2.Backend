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
                KanbanModel::field_kanban_title_id => 0,
                KanbanModel::field_project_id => 0,
                KanbanModel::field_created_at => $this->faker->dateTime,
                KanbanModel::field_updated_at => $this->faker->dateTime
            ];
        }
    }
?>