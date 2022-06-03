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
    use App\Models\tables\BoardModel;


    /**
     *
     */
    class TestingBoardModelFactory
        extends Factory
    {
        // Variables
        protected $model        = BoardModel::class;

        //
        /**
         * @return array
         */
        public final function definition(): array
        {
            return
            [
                BoardModel::field_kanban_id => 0,
                BoardModel::field_board_title_id => 0,
                BoardModel::field_body => '',
                BoardModel::field_created_at => $this->faker->dateTime,
                BoardModel::field_updated_at => $this->faker->dateTime
            ];
        }
    }
?>