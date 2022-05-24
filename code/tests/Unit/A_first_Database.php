<?php
    namespace Tests\Unit;

    use Illuminate\Foundation\Testing\RefreshDatabase;


    /**
     *
     */
    class A_first_Database
        extends BaseUnit
    {
        use RefreshDatabase;

        public function test_reset()
        {
            $this->assertTrue( true );
        }
    }
?>