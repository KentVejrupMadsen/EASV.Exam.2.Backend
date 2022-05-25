<?php
    namespace Database\Factories\tables;

    use App\Models\tables\AccountEmailModel;
    use Illuminate\Database\Eloquent\Factories\Factory;

    use Illuminate\Support\Str;


    class AccountEmailModelFactory
        extends Factory
    {
        protected $model = AccountEmailModel::class;

        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition()
        {
            return
            [
                'content' => $this->faker
                                  ->unique()
                                  ->safeEmail
            ];
        }
    }
?>