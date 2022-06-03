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
    use App\Models\tables\BoardTitleModel;


    /**
     *
     */
    class TestingBoardTitleModelFactory
        extends Factory
    {
        // Variables
        protected $model = BoardTitleModel::class;

        /**
         * @return array|mixed[]
         */
        public final function definition(): array
        {
            return
            [
                BoardTitleModel::field_content => $this->faker->unique()->realText(50)
            ];
        }
    }
?>