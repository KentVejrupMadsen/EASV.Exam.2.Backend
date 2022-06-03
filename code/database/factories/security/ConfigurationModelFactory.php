<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\security;

    // Internal libraries
    use App\Models\security\ConfigurationModel;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    class ConfigurationModelFactory
        extends Factory
    {
        // Variables
        protected $model        = ConfigurationModel::class;
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


        /**
         * @return array|mixed[]|null[]
         */
        public function definition(): array
        {
            if( $this->getDebugState() )
            {
                return
                    [
                        //
                        'key'   => $this->faker->text,
                        'value' => '{ }'
                    ];
            }
            else
            {
                return
                    [
                        //
                        'key'   => null,
                        'value' => null
                    ];
            }
        }
    }
?>