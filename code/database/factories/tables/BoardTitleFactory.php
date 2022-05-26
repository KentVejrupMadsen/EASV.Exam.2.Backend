<?php
    namespace Database\Factories\tables;

    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    class BoardTitleFactory
        extends Factory
    {

        public function definition()
        {
            return
            [
                'content'=>$this->faker->title
            ];
        }
    }
?>