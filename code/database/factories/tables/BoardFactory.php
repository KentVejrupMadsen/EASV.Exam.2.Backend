<?php
    namespace Database\Factories\tables;

    // External libraries
    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\BoardModel;


    /**
     *
     */
    final class BoardFactory
        extends Factory
    {
        // Variables
        protected $model        = BoardModel::class;
        private static $debug   = false;


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
                        'kanban_id' => 0,
                        'board_title_id' => 0,
                        'body' => '{}',
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
                        'kanban_id'      => 0,
                        'board_title_id' => 0,
                        'body'           => null,
                        'created_at'     => Carbon::now(),
                        'updated_at'     => Carbon::now()
                    ];
            }
        }
    }
?>