<?php
    namespace Database\Factories\security;

    use App\Models\security\CSRFModel;

    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Str;

    /**
     *
     */
    final class CSRFModelFactory
        extends Factory
    {
        protected $model = CSRFModel::class;


        public function definition(): array
        {
            return
            [
                'assigned_to' => $this->faker->ipv4,

                'secure_token' => Str::random( 32 ),
                'secret_token' => Str::random( 32 ),

                'issued' => $this->faker->time,
                'accessed' => $this->faker->time,

                'activated' => $this->faker->boolean,
                'invalidated' => $this->faker->boolean
            ];
        }
    }
?>