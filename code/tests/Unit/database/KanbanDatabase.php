<?php
    namespace Tests\Unit\database;

    use App\Models\tables\KanbanModel;
    use App\Models\tables\KanbanTitleModel;

    use Tests\Unit\BaseUnit;


    /**
     *
     */
    class KanbanDatabase
        extends BaseUnit
    {
        /**
         * @return void
         */
        public final function test_make_kanban_titles(): void
        {
            KanbanTitleModel::factory()->setDebugState( true );
            KanbanTitleModel::factory()->count(200)->create();
            KanbanTitleModel::factory()->setDebugState( true );

            $this->completed();
        }


        /**
         * @return void
         */
        public final function test_make_kanbans()
        {

            $this->completed();
        }
    }
?>
