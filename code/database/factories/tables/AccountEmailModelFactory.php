<?php
    namespace Database\Factories\tables;

    use App\Models\tables\AccountEmailModel;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class AccountEmailModelFactory
        extends Factory
    {
        protected $model = AccountEmailModel::class;

        /**
         * @return array
         */
        public final function definition(): array
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