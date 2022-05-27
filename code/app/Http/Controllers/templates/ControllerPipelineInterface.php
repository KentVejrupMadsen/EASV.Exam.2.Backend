<?php
    namespace App\Http\Controllers\templates;

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
?>