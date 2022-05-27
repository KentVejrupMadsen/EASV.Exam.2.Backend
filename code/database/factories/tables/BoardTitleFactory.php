<?php
    namespace Database\Factories\tables;

    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class BoardTitleFactory
        extends Factory
    {

        public function definition(): array
        {
            return
            [
                'content' => $this->faker
                                  ->title
            ];
        }
    }
?>