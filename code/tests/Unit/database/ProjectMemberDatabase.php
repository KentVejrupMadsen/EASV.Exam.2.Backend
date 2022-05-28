<?php
    namespace Tests\Unit\database;

    use App\Models\tables\MemberGroupModel;
    use App\Models\tables\ProjectMemberModel;
    use App\Models\tables\ProjectModel;
    use App\Models\tables\User;
    use Tests\Unit\BaseUnit;


    /**
     *
     */
    final class ProjectMemberDatabase
        extends BaseUnit
    {
        /**
         * @return void
         */
        public function test_make_member_groups(): void
        {
            MemberGroupModel::factory()->setDebugState(true);
            MemberGroupModel::factory()->count(200)->create();
            MemberGroupModel::factory()->setDebugState(false);
            $this->completed();
        }


        /**
         * @return void
         * @throws \Exception
         */
        public final function test_add_project_members(): void
        {
            $allAccounts    = User::all()->shuffle()->all();
            $maxAccounts = sizeof($allAccounts);

            $memberGroups   = MemberGroupModel::all()->shuffle()->all();
            $maxGroups = sizeof($memberGroups);

            $projects       = ProjectModel::all()->shuffle()->all();

            ProjectMemberModel::factory()->setDebugState( true );

            for( $idxProject = 0;
                 $idxProject < 200;
                 $idxProject++ )
            {
                $currentProject = $projects[$idxProject];

                $randomAccountIdx = random_int(0, $maxAccounts-1);
                $randomAccountModel = $allAccounts[$randomAccountIdx];

                $randomGroupIdx = random_int(0, $maxGroups - 1);
                $randomGroupModel = $memberGroups[$randomGroupIdx];

                ProjectMemberModel::factory()->create( [ 'project_id' => $currentProject->id,
                                                         'account_id' => $randomAccountModel->id,
                                                         'member_group_id' => $randomGroupModel->id ] );
            }

            ProjectMemberModel::factory()->setDebugState( false );
            $this->completed();
        }

    }
?>