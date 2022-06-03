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
    use App\Models\tables\PersonFirstnameModel;


    /**
     *
     */
    class TestingPersonFirstnameModelFactory
        extends Factory
    {
        // Variables
        protected $model        = PersonFirstnameModel::class;


        //
        /**
         * @return array
         */
        public final function definition(): array
        {
            if( $this->getDebugState() )
            {
                return
                [
                    //
                    'content' => $this->faker->unique()->firstName
                ];
            }
            else
            {
                return
                    [
                        //
                        'content' => null
                    ];
            }
        }
    }
?>