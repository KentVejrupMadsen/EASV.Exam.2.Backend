<?php
    namespace Database\Factories\tables;

    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class TaskModelFactory
        extends Factory
    {
        public function definition()
        {
            return
            [
                'board_id' => 0,
                'content' => $this->faker
                                  ->realText
            ];
        }
    }
?>