<?php
    namespace App\Http\Controllers\http;

    use App\Http\Controllers\templates\CrudController;
    use Illuminate\Http\Request;


    /**
     *
     */
    interface ControllerPipelineInterface
    {
        /**
         * @param Request $request
         * @return bool
         */
        public function pipelineTowardJSON( Request $request ): bool;

        /**
         * @return bool
         */
        public function hasImplementedJSON(): bool;


        /**
         * @param Request $request
         * @return bool
         */
        public function pipelineTowardXML( Request $request ): bool;

        /**
         * @return bool
         */
        public function hasImplementedXML(): bool;


        /**
         * @param Request $request
         * @return bool
         */
        public function pipelineTowardCSV( Request $request ): bool;

        /**
         * @return bool
         */
        public function hasImplementedCSV(): bool;
    }


    /**
     *
     */
    abstract class ControllerPipeline
        implements ControllerPipelineInterface
    {
        public function __constructor()
        {

        }

    }


    /**
     *
     */
    abstract class BaseHTTPController
        extends CrudController
    {
        /**
         *
         */
        public function __construct()
        {
            parent::__construct();

        }
    }
?>