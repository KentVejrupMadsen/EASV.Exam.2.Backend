<?php
    namespace Database\Factories\tables;

    use App\Models\tables\BoardModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    final class BoardFactory
        extends Factory
    {
        protected $model = BoardModel::class;
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
                'kanban_id' => 0,
                'board_title_id' => 0,

                'body' => '{}',

                'created_at' => $this->faker
                                     ->dateTime,

                'updated_at' => $this->faker
                                     ->dateTime
            ];
        }
    }
?>