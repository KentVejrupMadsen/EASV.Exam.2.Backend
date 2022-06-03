<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\security;

    // External libraries
    use Carbon\Carbon;

    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Str;

    // Internal libraries
    use App\Models\security\CSRFModel;


    /**
     *
     */
    class CSRFModelFactory
        extends Factory
    {
        // Variables
        protected $model        = CSRFModel::class;
        private static $debug   = false;


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
                        'assigned_to'  => $this->faker->ipv4,
                        'secure_token' => Str::random( 32 ),
                        'secret_token' => Str::random( 32 ),

                        'issued'       => $this->faker->time,
                        'accessed'     => $this->faker->time,

                        'activated'    => $this->faker->boolean,
                        'invalidated'  => $this->faker->boolean
                    ];
            }
            else
            {
                return
                    [
                        'assigned_to'  => null,
                        'secure_token' => Str::random( 32 ),
                        'secret_token' => Str::random( 32 ),
                        'issued'       => Carbon::now(),
                        'accessed'     => null,
                        'activated'    => false,
                        'invalidated'  => false
                    ];
            }
        }
    }
?>