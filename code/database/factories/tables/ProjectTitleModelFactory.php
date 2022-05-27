<?php
    namespace Database\Factories\tables;

    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class ProjectTitleModelFactory
        extends Factory
    {

        public final function definition(): array
        {
            return
            [
                'content' => $this->faker
                                  ->unique()
                                  ->jobTitle
            ];
        }
    }
?>
