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


        public function definition()
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