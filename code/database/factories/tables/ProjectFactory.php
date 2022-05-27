<?php
    namespace Database\Factories\tables;

    use App\Models\tables\ProjectModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class ProjectFactory
        extends Factory
    {
        protected $model = ProjectModel::class;
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
                //
                'account_owner_id' => 0,
                'project_title_id' => 0,

                'description' => $this->faker
                                      ->realText,
                'tags' => '{ }',

                'created_at' => $this->faker
                                     ->dateTime,

                'updated_at' => $this->faker
                                     ->dateTime
            ];
        }
    }
?>