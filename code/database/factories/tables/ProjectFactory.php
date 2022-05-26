<?php
    namespace Database\Factories\tables;

    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
     */
    class ProjectFactory
        extends Factory
    {
        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition()
        {
            return
            [
                //
                'account_owner_id'=>0,
                'project_title_id'=>0,
                'description'=>$this->faker->realText,
                'tags'=>'{ }',
                'created_at'=>$this->faker->dateTime,
                'updated_at'=>$this->faker->dateTime
            ];
        }
    }
?>