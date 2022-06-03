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
    use App\Models\tables\MemberGroupModel;


    /**
     *
     */
    class TestingMemberGroupModelFactory
        extends Factory
    {
        // Variables
        protected $model        = MemberGroupModel::class;


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
                    'content' => $this->faker->unique()->text(45)
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