<?php
    namespace Database\Factories\tables;

    use App\Models\tables\PersonNameModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class PersonNameModelFactory
        extends Factory
    {
        // Variables
        protected $model = PersonNameModel::class;
        private static $debug = false;

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
                        'account_information_id'    => 0,
                        'person_name_first_id'      => 0,
                        'person_name_lastname_id'   => 0,
                        'person_name_middlename'    => 0
                    ];
            }
            else
            {
                return
                    [
                        //
                        'account_information_id'    => 0,
                        'person_name_first_id'      => 0,
                        'person_name_lastname_id'   => 0,
                        'person_name_middlename'    => 0
                    ];
            }
        }
    }
?>
