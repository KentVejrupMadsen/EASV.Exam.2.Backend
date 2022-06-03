<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables\testing;

    // External libraries
    use Carbon\Carbon;
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
                'project_id' => 0,
                'account_id' => 0,
                'member_group_id' => 0
            ];
        }
    }
?>