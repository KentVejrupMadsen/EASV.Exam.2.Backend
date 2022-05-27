<?php
    namespace Database\Factories\tables;

    use App\Models\tables\AddressRoadNameModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class AddressRoadNameModelFactory
        extends Factory
    {
        // Variables
        protected $model = AddressRoadNameModel::class;
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
                        'content' => $this->faker
                            ->streetName
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
