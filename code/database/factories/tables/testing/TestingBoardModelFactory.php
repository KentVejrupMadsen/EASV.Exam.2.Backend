<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables\testing;

    // External libraries
    use Carbon\Carbon;
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
        public function definition(): array
        {
            if( $this->getDebugState() )
            {
                return
                    [
                        'kanban_id' => 0,
                        'board_title_id' => 0,
                        'body' => '{}',
                        'created_at' => $this->faker
                                             ->dateTime,
                        'updated_at' => $this->faker
                                             ->dateTime
                    ];
            }
            else
            {
                return
                    [
                        'kanban_id'      => 0,
                        'board_title_id' => 0,
                        'body'           => null,
                        'created_at'     => Carbon::now(),
                        'updated_at'     => Carbon::now()
                    ];
            }
        }
    }
?>