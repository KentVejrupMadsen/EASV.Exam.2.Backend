<?php
    namespace Database\Factories\tables;

    use App\Models\tables\KanbanTitleModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
     */
    class KanbanTitleModelFactory
        extends Factory
    {
        protected $model = KanbanTitleModel::class;

        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition()
        {
            return
            [
                'content'=> $this->faker->title
            ];
        }
    }
?>