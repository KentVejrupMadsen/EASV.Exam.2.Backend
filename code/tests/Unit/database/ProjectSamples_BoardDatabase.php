<?php
    namespace Tests\Unit\database;

    use App\Models\tables\BoardModel;
    use App\Models\tables\BoardTitleModel;
    use Tests\Unit\BaseUnit;


    /**
     *
     */
    final class ProjectSamples_BoardDatabase
        extends BaseUnit
    {
        /**
         * @return void
         */
        public function test_make_board_titles(): void
        {
            BoardTitleModel::factory()->setDebugState( true );
            BoardTitleModel::factory()->count(200)->create();
            BoardTitleModel::factory()->setDebugState( false );

            $this->completed();
        }


        /**
         * @return void
         */
        public function test_make_boards(): void
        {

            BoardModel::factory()->setDebugState( true );

            for($idx = 0; $idx = 0; $idx++)
            {

            }

            BoardModel::factory()->setDebugState( false );
            $this->completed();
        }
    }
?>