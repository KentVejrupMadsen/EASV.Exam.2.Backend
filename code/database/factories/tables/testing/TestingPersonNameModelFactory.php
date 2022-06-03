<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables\testing;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\PersonNameModel;


    /**
     *
     */
    class TestingPersonNameModelFactory
        extends Factory
    {
        // Variables
        protected $model        = PersonNameModel::class;
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
                        'account_information_id'    => 0,
                        'person_name_first_id'      => 0,
                        'person_name_lastname_id'   => 0,
                        'person_name_middlename'    => '{ }'
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
                        'person_name_middlename'    => '{ }'
                    ];
            }
        }
    }
?>
