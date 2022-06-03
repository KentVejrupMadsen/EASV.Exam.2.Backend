<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\PersonSurnameModel;


    /**
     *
     */
    class PersonSurnameModelFactory
        extends Factory
    {
        // Variables
        protected $model        = PersonSurnameModel::class;
        private static $debug   = false;


        // Accessors
        public final function getDebugState(): bool
        {
            return self::$debug;
        }

        public final function setDebugState( bool $value ): void
        {
            self::$debug = $value;
        }

        //
        /**
         * @return array
         */
        public final function definition(): array
        {
            if( $this->getDebugState() )
            {
                return
                [
                    //
                    'content' => $this->faker->unique()->lastName
                ];
            }
            else
            {
                return
                    [
                        //
                        'content' => null
                    ];
            }
        }
    }
?>