<?php
    namespace Database\Factories\security;

    use App\Models\security\RecaptchaModel;
    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     * 
     */
    final class RecaptchaModelFactory
        extends Factory
    {
        //
        protected $model = RecaptchaModel::class;
        private static $debug = false;


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
        public final function definition(): array
        {
            if( $this->getDebugState() )
            {
                return
                    [
                        //
                        'success'  => $this->faker->boolean,
                        'score'    => $this->faker->randomFloat(1, 0, 1),
                        'at_date'  => $this->faker->time,
                        'hostname' => $this->faker->domainName,
                        'error'    => $this->faker->text
                    ];
            }
            else
            {
                return
                    [
                        //
                        'success'  => false,
                        'score'    => 0.0,
                        'at_date'  => Carbon::now(),
                        'hostname' => null,
                        'error'    => null
                    ];
            }
        }
    }
?>