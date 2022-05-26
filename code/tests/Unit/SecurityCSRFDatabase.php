<?php
    namespace Tests\Unit;

    use App\Models\security\CSRFModel;


    class SecurityCSRFDatabase
        extends BaseUnit
    {
        public function test_csrf_tokens_generated()
        {
            CSRFModel::factory()->count(1000 )->create();
            $this->assertTrue(true);
        }
    }
?>
