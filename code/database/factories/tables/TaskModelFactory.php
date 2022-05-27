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
        protected $model = TaskModel::class;
        private static $debug = false;

        public final function getDebugState(): bool
        {
            return self::$debug;
        }

        public final function setDebugState( bool $value ): void
        {
            self::$debug = $value;
        }

        /**
         * @return array
         */
        public function definition(): array
        {
            return
            [
                'board_id' => 0,
                'content' => $this -> faker
                                   -> realText
            ];
        }
    }
?>