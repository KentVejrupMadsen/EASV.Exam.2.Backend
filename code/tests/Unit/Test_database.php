<?php
    namespace Tests\Unit;

    use Illuminate\Foundation\Testing\RefreshDatabase;


    /**
     *
     */
    class Testdatabase
        extends BaseUnit
    {
        use RefreshDatabase;


        /**
         * Returns true by default
         * @return void
         */
        public final function test_reset()
        {
            $this->assertTrue( true );
        }
    }
?>