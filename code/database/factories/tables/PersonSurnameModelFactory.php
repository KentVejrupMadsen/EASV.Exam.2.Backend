<?php
    namespace Database\Factories\tables;

    use App\Models\tables\PersonSurnameModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class PersonSurnameModelFactory
        extends Factory
    {
        protected $model = PersonSurnameModel::class;
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
                                  ->lastName
            ];
        }
    }
?>