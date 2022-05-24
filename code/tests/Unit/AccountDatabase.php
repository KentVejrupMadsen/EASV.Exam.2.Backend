<?php
    namespace Tests\Unit;

    use App\Models\tables\AccountEmailModel;
    use App\Models\tables\User;


    class AccountDatabase
        extends BaseUnit
    {
        private $maxCount = 1000;

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

        public function test_createAccount()
        {
            User::factory()->count( $this->maxCount )->create();
            $this->assertTrue(true );
        }

        public function test_subscripe()
        {
            $this->assertTrue(true );
        }
    }
?>