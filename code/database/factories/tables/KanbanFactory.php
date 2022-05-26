<?php
    namespace Database\Factories\tables;

    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
     */
    class KanbanFactory
        extends Factory
    {
        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition()
        {
            return
            [
                //
                'kanban_title_id'=>0,
                'project_id'=>0,
                'created_at'=>$this->faker->dateTime,
                'updated_at'=>$this->faker->dateTime
            ];
        }
    }
?>