<?php
    namespace Tests\Unit\database;

    use App\Models\tables\ProjectModel;
    use App\Models\tables\ProjectTitleModel;
    use App\Models\tables\User;
    use Exception;
    use Tests\Unit\BaseUnit;


    /**
     *
     */
    final class ProjectDatabase
        extends BaseUnit
    {
        /**
         * @return void
         */
        public final function test_make_project_titles(): void
        {
            ProjectTitleModel::factory()->setDebugState( true );
            ProjectTitleModel::factory()->count(1000)->create();
            ProjectTitleModel::factory()->setDebugState( false );

            $this->completed();
        }


        /**
         * @return array|null
         */
        protected final function getTitles(): ?array
        {
            $arr = ProjectTitleModel::all()->all();
            return $arr;
        }


        /**
         * @return array
         */
        protected final function getAccounts(): array
        {
            return User::all()->all();
        }


        /**
         * @param array $arr
         * @return int
         */
        protected function shuffle( array $arr ): int
        {
            $start = 0;
            $max = sizeof( $arr ) - 1;
            $ret = 0;

            try
            {
                $ret = random_int( $start, $max );
            }
            catch ( Exception $exception )
            {
                $ret = -1;
            }

            return $ret;
        }


        /**
         * @return void
         * @throws \Exception
         */
        public function test_make_projects(): void
        {
            $accounts = $this->getAccounts();
            $maxAccounts = sizeof( $accounts );

            $titleModels = $this->getTitles();

            ProjectModel::factory()->setDebugState( true );

            $sample_size = 4;

            // Loops all accounts
            for( $idx = 0;
                 $idx < $maxAccounts;
                 $idx++ )
            {
                // idx, indexed user
                $currentAccount = $accounts[$idx];

                // Creates Project samples for each user
                for( $idxSample = 0;
                     $idxSample < $sample_size;
                     $idxSample++)
                {
                    $rTitleIndex = $this->shuffle( $titleModels );
                    $randomTitleModel = $titleModels[$rTitleIndex];

                    ProjectModel::factory()->create( [ 'account_owner_id' => $currentAccount->id,
                                                       'project_title_id' => $randomTitleModel->id ] );
                }

            }

            ProjectModel::factory()->setDebugState( false );
            $this->completed();
        }
    }
?>