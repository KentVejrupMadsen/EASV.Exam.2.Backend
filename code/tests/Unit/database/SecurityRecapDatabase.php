<?php
    namespace Tests\Unit\database;

    use App\Models\security\RecaptchaModel;
    use Tests\Unit\BaseUnit;


    /**
     *
     */
    final class SecurityRecapDatabase
        extends BaseUnit
    {
        /**
         * @return void
         */
        public final function test_Recaptcha_make(): void
        {
            RecaptchaModel::factory()->setDebugState( true );
            RecaptchaModel::factory()->count(200)->create();
            RecaptchaModel::factory()->setDebugState( false );

            $this->completed();
        }
    }
?>
