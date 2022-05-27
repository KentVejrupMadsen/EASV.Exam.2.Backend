<?php
    namespace Database\Factories\tables;

    use App\Models\tables\BoardTitleModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class BoardTitleFactory
        extends Factory
    {
        // Variables
        private static $debug = false;
        protected $model = BoardTitleModel::class;

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


        /**
         * @return array|mixed[]|null[]
         */
        public function definition(): array
        {
            if( $this->getDebugState() )
            {
                return
                    [
                        'content' => $this->faker
                            ->title
                    ];
            }
            else
            {
                return
                    [
                        'content' => null
                    ];
            }
        }
    }
?>