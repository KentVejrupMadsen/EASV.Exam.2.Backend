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
    use App\Models\tables\MemberGroupModel;


    /**
     *
     */
    class TestingMemberGroupModelFactory
        extends Factory
    {
        // Variables
        protected $model        = MemberGroupModel::class;
        private static $debug   = false;


        // Accessors
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
         * @return array
         */
        public final function definition(): array
        {
            if( $this->getDebugState() )
            {
                return
                [
                    'content' => $this->faker->unique()->text(45)
                ];
            }
            else
            {
                return
                [
                    'content' => null
                ];
            }
        }
    }
?>