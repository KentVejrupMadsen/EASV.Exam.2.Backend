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
        private static $debug   = false;



        /**
         * @return array|mixed[]
         */
        public function definition(): array
        {
            if( $this->getDebugState() )
            {
                return
                    [
                        'content' => $this->faker
                                          ->unique()
                                          ->realText(50)
                    ];
            }
            else
            {
                return
                    [
                        'content' => null
                    ];
            }
        }
    }
?>