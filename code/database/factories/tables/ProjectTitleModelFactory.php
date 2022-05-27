<?php
    namespace Database\Factories\tables;

    use App\Models\tables\ProjectTitleModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class ProjectTitleModelFactory
        extends Factory
    {
        // Variables
        protected $model = ProjectTitleModel::class;
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
                                      ->jobTitle
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
