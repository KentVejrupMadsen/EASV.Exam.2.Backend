<?php
    namespace Tests\Unit\database;

    use App\Models\security\ConfigurationModel;
    use Tests\Unit\BaseUnit;


    /**
     *
     */
    final class SecurityConfigurationDatabase
        extends BaseUnit
    {
        /**
         * @return void
         */
        public final function test_configuration_make()
        {
            ConfigurationModel::factory()->setDebugState( true );

            ConfigurationModel::factory()->count(200)->create();

            ConfigurationModel::factory()->setDebugState( false );
            $this->completed();
        }
    }
?>
