<?php
    namespace Tests\Unit;

    use App\Models\tables\AccountEmailModel;


    class AccountDatabase
        extends BaseUnit
    {
        private $maxCount = 50;

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