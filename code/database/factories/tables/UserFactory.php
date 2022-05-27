<?php
    namespace Database\Factories\tables;

    use App\Models\tables\User;
    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class UserFactory
        extends Factory
    {
        // Variables
        protected $model = User::class;

        /**
         * @return array
         */
        public final function definition(): array
        {
            return
            [
                'username' => '',

                'email_id' => 0,

                'email_verified_at' => null,

                'password'   => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

    }
?>