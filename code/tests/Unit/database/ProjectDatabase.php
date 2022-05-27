<?php
    namespace Tests\Unit\database;

    use App\Models\tables\ProjectTitleModel;


    class ProjectDatabase
        extends BaseUnit
    {
        public function test_make_project_titles()
        {
            ProjectTitleModel::factory()->count(1000)->create();
            $this->assertTrue(true);
        }

        public function test_make_projects()
        {

            $this->assertTrue(true);
        }
    }
?>