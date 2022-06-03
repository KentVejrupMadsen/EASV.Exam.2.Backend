<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables\testing;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\KanbanTitleModel;


    /**
     *
     */
    class TestingKanbanTitleModelFactory
        extends Factory
    {
        // Variables
        protected $model = KanbanTitleModel::class;


        /**
         * @return array|mixed[]
         */
        public function definition(): array
        {
            return
            [
                KanbanTitleModel::field_content => $this->faker->unique()->jobTitle
            ];
        }
    }
?>