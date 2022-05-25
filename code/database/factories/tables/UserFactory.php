<?php
    namespace Database\Factories\tables;

    use App\Models\tables\User;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    class UserFactory
        extends Factory
    {
        // Variables
        protected $model = User::class;

        private $countUser = 1;
        private static $startPos = 0;

        // Accessors
        public final function setStartPos( int $pos )
        {
            self::$startPos = $pos;
        }

        public final function getStartPos(): int
        {
            return self::$startPos;
        }

        /**
         * @return array|mixed[]
         */
        public final function definition()
        {
            return
            [
                'username' => $this->faker
                                   ->unique()
                                   ->userName,

                'email_id' => $this->addUser() + $this->getStartPos(),

                'email_verified_at' => $this->randomValidation(),

                'password'   => $this->faker
                                     ->password,

                'created_at' => $this->faker
                                     ->time,
                'updated_at' => $this->faker
                                     ->time,
            ];
        }


        protected function randomValidation()
        {
            if( $this->faker->boolean )
            {
                return $this->faker->time;
            }
            else
            {
                return null;
            }
        }

        protected function addUser()
        {
            $ret = $this->countUser;
            $this->countUser = $this->countUser + 1;
            return $ret;
        }

    }
?>