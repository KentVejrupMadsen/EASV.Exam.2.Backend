<?php
    namespace App\Http\Controllers\http;

    use App\Http\Controllers\templates\CrudController;


    /**
     * Used to implement a pipeline flow. -> essentially defining which types
     * can be returned by the API.
     */
    abstract class ControllerPipeline
        extends CrudController
        implements ControllerPipelineInterface
    {


    }
?>