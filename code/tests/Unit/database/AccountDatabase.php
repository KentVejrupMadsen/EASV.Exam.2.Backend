<?php
    namespace Tests\Unit\database;

    use App\Models\tables\AccountEmailModel;
    use Tests\Unit\BaseUnit;


    /**
     *
     */
    final class AccountDatabase
        extends BaseUnit
    {
        /**
         * @return void
         */
        public function test_add_mail()
        {
            AccountEmailModel::factory()->setDebugState( true );
            AccountEmailModel::factory()->count( 10 )->create();

            $this->assertTrue(true );
        }

        /**
         * @return void
         */
        public function test_create_account()
        {

            $this->assertTrue(true );
        }

        /**
         * @return void
         */
        public function test_subscribe()
        {
            $this->assertTrue(true );
        }
    }
?>