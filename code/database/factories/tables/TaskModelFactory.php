<?php
    namespace Database\Factories\tables;

    use App\Models\tables\TaskModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class TaskModelFactory
        extends Factory
    {
        // Variables
        protected $model = TaskModel::class;
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
        /**
         * @return array
         */
        public function definition(): array
        {
            if( $this->getDebugState() )
            {
                return
                    [
                        'board_id' => 0,
                        'content'  => $this->faker
                                           ->realText
                    ];
            }
            else
            {
                return
                    [
                        'board_id' => 0,
                        'content'  => null
                    ];
            }
        }
    }
?>