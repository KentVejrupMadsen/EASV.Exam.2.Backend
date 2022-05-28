<?php
    namespace Database\Factories\tables;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\ProjectTitleModel;


    /**
     *
     */
    final class ProjectTitleModelFactory
        extends Factory
    {
        // Variables
        protected $model      = ProjectTitleModel::class;
        private static $debug = false;


        // Accessors
        /**
         * @return bool
         */
        public final function getDebugState(): bool
        {
            return self::$debug;
        }

        /**
         * @param bool $value
         * @return void
         */
        public final function setDebugState( bool $value ): void
        {
            self::$debug = $value;
        }


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
