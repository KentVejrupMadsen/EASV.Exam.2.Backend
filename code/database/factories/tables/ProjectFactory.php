<?php
    namespace Database\Factories\tables;

    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    final class ProjectFactory
        extends Factory
    {
        /**
         * @return array
         */
        public function definition(): array
        {
            return
            [
                //
                'account_owner_id' => 0,
                'project_title_id' => 0,

                'description' => $this->faker
                                      ->realText,
                'tags' => '{ }',

                'created_at' => $this->faker
                                     ->dateTime,

                'updated_at' => $this->faker
                                     ->dateTime
            ];
        }
    }
?>