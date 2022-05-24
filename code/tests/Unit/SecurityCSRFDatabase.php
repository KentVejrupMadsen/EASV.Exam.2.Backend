<?php
    namespace Tests\Unit;

    use App\Models\security\CSRFModel;

    class SecurityCSRFDatabase
        extends BaseUnit
    {
        /**
         * A basic unit test example.
         *
         * @return void
         */
        public function test_csrf_tokens_generated()
        {
            CSRFModel::factory()->count(50 )->create();
            $this->assertTrue(true);
        }
    }
?>
