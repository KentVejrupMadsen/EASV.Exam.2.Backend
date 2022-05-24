<?php
    namespace Tests\Unit;

    use App\Models\tables\AccountEmailModel;
    use Tests\TestCase;


    class AccountDatabase
        extends TestCase
    {
        private $maxCount = 100;

        /**
         * A basic unit test example.
         *
         * @return void
         */
        public function test_addMail()
        {
            AccountEmailModel::factory()->count( $this->maxCount )->create();
            $this->assertTrue(true );
        }
    }
?>