<?php
    namespace Database\Factories\tables;

    // External libraries
    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\KanbanModel;


    /**
     *
     */
    final class KanbanModelFactory
        extends Factory
    {
        // Variables
        private static $debug   = false;
        protected $model        = KanbanModel::class;


        // Accessor
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
         * @return array|mixed[]
         */
        public function definition(): array
        {
            if( $this->getDebugState() )
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
            else
            {
                return
                    [
                        //
                        'kanban_title_id'   => 0,
                        'project_id'        => 0,
                        'created_at'        => Carbon::now(),
                        'updated_at'        => Carbon::now()
                    ];
            }
        }
    }
?>