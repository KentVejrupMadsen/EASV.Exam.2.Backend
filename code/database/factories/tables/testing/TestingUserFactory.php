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
    use App\Models\tables\User;
    use Illuminate\Support\Facades\Hash;


    /**
     *
     */
    class TestingUserFactory
        extends Factory
    {
        // Variables
        protected $model        = User::class;


        /**
         * @return \DateTime|null
         */
        protected function fakeIsVerified(): ?\DateTime
        {
            if( $this->faker->boolean )
            {
                return $this->faker->dateTime;
            }
            else
            {
                return null;
            }
        }

        protected function generatePassword(): ?string
        {
            if( $this->getDebugState() )
            {
                return Hash::make( $this->faker->realTextBetween( 8, 16 ) );
            }
            else
            {
                return null;
            }
        }


        /**
         * @return array
         */
        public final function definition(): array
        {
            return
            [
                User::field_username          => $this->faker->unique()->userName,
                User::field_email_id          => 0,
                User::field_verified_at       => $this->fakeIsVerified(),
                User::field_password          => $this->generatePassword(),
                User::field_created_at        => $this->faker->dateTime,
                User::field_updated_at        => $this->faker->dateTime,
                User::field_settings          => ''
            ];
        }

    }
?>