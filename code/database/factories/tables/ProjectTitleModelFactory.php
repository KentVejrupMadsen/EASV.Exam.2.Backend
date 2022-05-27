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
        protected $model = ProjectTitleModel::class;
        private static $debug = false;

        public final function getDebugState(): bool
        {
            return self::$debug;
        }

        public final function setDebugState( bool $value ): void
        {
            self::$debug = $value;
        }

        public final function definition(): array
        {
            return
            [
                'content' => $this->faker
                                  ->unique()
                                  ->jobTitle
            ];
        }
    }
?>
