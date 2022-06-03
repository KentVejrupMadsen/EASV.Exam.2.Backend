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
    use App\Models\tables\TaskModel;


    /**
     *
     */
    class TestingTaskModelFactory
        extends Factory
    {
        // Variables
        protected $model = TaskModel::class;


        //
        /**
         * @return array
         */
        public final function definition(): array
        {
            return
            [
                'board_id' => 0,
                'content'  => $this->faker->realText
            ];
        }
    }
?>