<?php
    namespace Tests\Unit\database;

    use App\Models\tables\KanbanModel;
    use App\Models\tables\KanbanTitleModel;

use App\Models\tables\ProjectModel;
use Tests\Unit\BaseUnit;


    /**
     *
     */
    class ProjectKanbanDatabase
        extends BaseUnit
    {
        /**
         * @return void
         */
        public final function test_make_kanban_titles(): void
        {
            KanbanTitleModel::factory()->setDebugState( true );
            KanbanTitleModel::factory()->count(200)->create();
            KanbanTitleModel::factory()->setDebugState( false );

            $this->completed();
        }


        /**
         * @return void
         * @throws \Exception
         */
        public final function test_make_kanbans(): void
        {
            $projectModels = ProjectModel::all()->all();
            $titlesModels = KanbanTitleModel::all()->all();

            KanbanModel::factory()->setDebugState( true );

            $maxProjects = sizeof( $projectModels );
            $maxTitles = sizeof( $titlesModels ) - 1;

            for( $idx = 0;
                 $idx < $maxProjects;
                 $idx++ )
            {
                $currentProject = $projectModels[$idx];

                $titleRandomId = random_int( 0, $maxTitles );
                $title = $titlesModels[$titleRandomId];

                KanbanModel::factory()->create( [ 'kanban_title_id' => $title->id,
                                                  'project_id' => $currentProject->id ] );

            }

            KanbanModel::factory()->setDebugState( false );
            $this->completed();
        }
    }
?>
