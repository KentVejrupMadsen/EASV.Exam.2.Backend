<?php
    namespace Tests\Unit\database;

    use App\Models\security\CSRFModel;
    use Tests\Unit\BaseUnit;


    /**
     *
     */
    final class SecurityCSRFDatabase
        extends BaseUnit
    {
        /**
         * @return void
         */
        public final function test_csrf_tokens_generated()
        {
            CSRFModel::factory()->setDebugState( true );

            CSRFModel::factory()->count(200)->create();

            CSRFModel::factory()->setDebugState( false );
            $this->completed();
        }
    }
?>
