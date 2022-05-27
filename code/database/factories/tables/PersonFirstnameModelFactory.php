<?php
    namespace Database\Factories\tables;

    use App\Models\tables\PersonFirstnameModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class PersonFirstnameModelFactory
        extends Factory
    {
        protected $model = PersonFirstnameModel::class;
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
        public final function definition(): array
        {
            return
            [
                //
                'content' => $this->faker
                                  ->firstName
            ];
        }
    }
?>