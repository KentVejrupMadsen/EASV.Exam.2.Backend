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
    use App\Models\tables\ProjectTitleModel;


    /**
     *
     */
    class TestingProjectTitleModelFactory
        extends Factory
    {
        // Variables
        protected $model      = ProjectTitleModel::class;



        //
        public final function definition(): array
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
            };
        }
    }
?>
