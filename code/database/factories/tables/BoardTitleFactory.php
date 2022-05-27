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
        private static $debug = false;
        protected $model = BoardTitleModel::class;

        public final function getDebugState(): bool
        {
            return self::$debug;
        }

        public final function setDebugState( bool $value ): void
        {
            self::$debug = $value;
        }


        public function definition(): array
        {
            return
            [
                'content' => $this->faker
                                  ->title
            ];
        }
    }
?>