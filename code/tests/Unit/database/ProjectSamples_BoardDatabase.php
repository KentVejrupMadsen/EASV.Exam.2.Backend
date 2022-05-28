<?php
    namespace Tests\Unit\database;

    use App\Models\tables\BoardModel;
    use App\Models\tables\BoardTitleModel;
    use App\Models\tables\KanbanModel;
    use App\Models\tables\TaskModel;

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
        public final function test_make_board_titles(): void
        {
            BoardTitleModel::factory()->setDebugState( true );
            BoardTitleModel::factory()->count(200)->create();
            BoardTitleModel::factory()->setDebugState( false );

            $this->completed();
        }


        /**
         * @return void
         * @throws \Exception
         */
        public final function test_make_boards(): void
        {
            $titles = BoardTitleModel::all()->all();
            $kanbans = KanbanModel::all()->all();

            BoardModel::factory()->setDebugState( true );

            $maxTitlesEnd = sizeof( $titles ) - 1;
            $maxKanbans = sizeof( $kanbans );

            $sample = 4;

            for( $idx = 0;
                 $idx < $maxKanbans;
                 $idx++)
            {
                $currentKanban = $kanbans[ $idx ];

                for( $boardIndex = 0;
                     $boardIndex < $sample;
                     $boardIndex++ )
                {
                    $rTitleIndex = random_int( 0, $maxTitlesEnd );
                    $randomTitle = $titles[ $rTitleIndex ];

                    BoardModel::factory()->create( [ 'kanban_id' => $currentKanban->id,
                                                      'board_title_id' => $randomTitle->id ] );
                }
            }

            BoardModel::factory()->setDebugState( false );
            $this->completed();
        }


        /**
         * @return void
         * @throws \Exception
         */
        public final function test_make_tasks(): void
        {
            $boards = BoardModel::all()->all();
            $maxBoards = sizeof( $boards );

            $sample = random_int(1, 8);

            TaskModel::factory()->setDebugState( true );

            for( $idx = 0;
                 $idx < $maxBoards;
                 $idx++ )
            {
                //
                $currentBoard = $boards[$idx];

                for( $sampleIdx = 0;
                     $sampleIdx < $sample;
                     $sampleIdx++ )
                {
                    TaskModel::factory()->create( [ 'board_id' => $currentBoard->id ] );
                }

            }

            TaskModel::factory()->setDebugState( false );
            $this->completed();
        }
    }
?>