<?php
    namespace App\Http\Controllers\templates;


    /**
     * Used to implement a pipeline flow. -> essentially defining which types
     * can be returned by the API.
     */
    abstract class ControllerPipeline
        extends CrudController
            implements ControllerPipelineInterface
    {
        public function __construct()
        {

        }


    }
?>