<?php
    namespace Tests\Unit;

    use Carbon\Carbon;
    use Illuminate\Foundation\Testing\RefreshDatabase;


    /**
     *
     */
    class TestDatabase
        extends BaseUnit
    {
        use RefreshDatabase;

        /**
         * @return void
         */
        public final function test_reset(): void
        {
            $this->output('Test is started ' . Carbon::now()->toString() );

            $this->completed();
        }
    }
?>