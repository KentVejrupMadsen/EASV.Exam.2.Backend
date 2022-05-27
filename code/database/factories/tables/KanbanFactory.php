<?php
    namespace Database\Factories\tables;

    use App\Models\tables\KanbanModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class KanbanFactory
        extends Factory
    {
        private static $debug = false;
        protected $model = KanbanModel::class;

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
                //
                'kanban_title_id' => 0,
                'project_id' => 0,

                'created_at' => $this->faker
                                     ->dateTime,

                'updated_at' => $this->faker
                                     ->dateTime
            ];
        }
    }
?>