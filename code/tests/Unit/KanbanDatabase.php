<?php
    namespace Tests\Unit;

    use App\Models\tables\KanbanTitleModel;

    class KanbanDatabase
        extends BaseUnit
    {
        /**
         * A basic unit test example.
         *
         * @return void
         */
        public function test_make_kanban_titles()
        {
            KanbanTitleModel::factory()->count(1000)->create();
            $this->assertTrue(true);
        }

        public function test_make_kanbans()
        {

            $this->assertTrue(true);
        }
    }
?>
