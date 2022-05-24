<?php
    namespace Database\Factories\tables;

    use App\Models\tables\User;
    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Str;


    class UserFactory
        extends Factory
    {
        protected $model = User::class;

        private $countUser = 1;
        private static $startPos = 0;

        public function setStartPos(int $pos)
        {
            self::$startPos = $pos;
        }

        public function getStartPos(): int
        {
            return self::$startPos;
        }

        /**
         * @return array|mixed[]
         */
        public function definition(): array
        {
            return
            [
                'username' => $this->faker->unique()->userName,
                'email_id' => $this->addUser() + $this->getStartPos(),
                'email_verified_at' => $this->randomValidation(),
                'password' => $this->faker->password,
                'created_at' => $this->faker->time,
                'updated_at' => $this->faker->time,
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