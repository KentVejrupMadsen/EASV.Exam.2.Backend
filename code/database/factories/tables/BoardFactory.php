<?php
    namespace Database\Factories\tables;

    use Illuminate\Database\Eloquent\Factories\Factory;


    class BoardFactory
        extends Factory
    {

        public function definition()
        {
            return
            [
                'kanban_id' => 0,
                'board_title_id' => 0,

                'body' => '{}',

                'created_at' => $this->faker
                                     ->dateTime,

                'updated_at' => $this->faker
                                     ->dateTime
            ];
        }
    }
?>