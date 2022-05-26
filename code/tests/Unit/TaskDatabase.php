<?php
    namespace Tests\Unit;

    use App\Models\tables\TaskModel;


    class TaskDatabase
        extends BaseUnit
    {
        public function test_make_test()
        {
            TaskModel::factory()->count(1000)->create();
            $this->assertTrue(true);
        }
    }
?>
