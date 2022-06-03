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
    use App\Models\tables\ProjectMemberModel;


    /**
     *
     */
    class TestingProjectMemberModelFactory
        extends Factory
    {
        // Variables
        protected $model      = ProjectMemberModel::class;


        /**
         * @return array
         */
        public final function definition(): array
        {
            return
            [
                    //
                ProjectMemberModel::project_id => 0,
                ProjectMemberModel::account_id => 0,
                ProjectMemberModel::member_group_id => 0
            ];
        }
    }
?>