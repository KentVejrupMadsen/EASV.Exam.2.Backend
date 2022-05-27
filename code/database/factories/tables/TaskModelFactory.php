<?php
    namespace Database\Factories\tables;

    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class TaskModelFactory
        extends Factory
    {
        /**
         * @return array
         */
        public function definition(): array
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