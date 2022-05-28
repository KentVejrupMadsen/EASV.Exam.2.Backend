<?php
    namespace Tests\Unit\database;

    use App\Models\tables\BoardModel;
    use App\Models\tables\BoardTitleModel;
    use App\Models\tables\KanbanModel;
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
         * @throws \Exception
         */
        public function test_make_boards(): void
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
    }
?>