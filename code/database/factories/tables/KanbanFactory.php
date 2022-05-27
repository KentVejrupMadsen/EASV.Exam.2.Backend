<?php
    namespace Database\Factories\tables;

    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class KanbanFactory
        extends Factory
    {
        /**
         * @return array
         */
        public function definition(): array
        {
            return
            [
                //
                'kanban_title_id' => 0,
                'project_id' => 0,

                'created_at' => $this->faker
                                     ->dateTime,

                'updated_at' => $this->faker
                                     ->dateTime
            ];
        }
    }
?>