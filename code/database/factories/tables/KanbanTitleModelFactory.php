<?php
    namespace Database\Factories\tables;

    use App\Models\tables\KanbanTitleModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class KanbanTitleModelFactory
        extends Factory
    {
        protected $model = KanbanTitleModel::class;
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
         * @return array|mixed[]
         */
        public function definition(): array
        {
            if($this->getDebugState())
            {
                return
                    [
                        'content'=> $this->faker
                            ->unique()
                            ->jobTitle
                    ];
            }
            else
            {
                return
                    [
                        'content'=> null
                    ];
            }
        }
    }
?>