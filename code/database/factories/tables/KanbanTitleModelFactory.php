<?php
    namespace Database\Factories\tables;

    use App\Models\tables\KanbanTitleModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class KanbanTitleModelFactory
        extends Factory
    {
        protected $model = KanbanTitleModel::class;


        /**
         * @return array|mixed[]
         */
        public function definition(): array
        {
            return
            [
                'content'=> $this->faker
                                 ->unique()
                                 ->jobTitle
            ];
        }
    }
?>