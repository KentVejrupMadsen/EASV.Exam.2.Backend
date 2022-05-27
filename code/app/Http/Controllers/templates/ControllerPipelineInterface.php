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
         * @return array|null
         */
        public function pipelineTowardJSON( Request $request ): ?array;

        /**
         * @return bool
         */
        public function hasImplementedJSON(): bool;


        /**
         * @param Request $request
         * @return array|null
         */
        public function pipelineTowardXML( Request $request ): ?array;

        /**
         * @return bool
         */
        public function hasImplementedXML(): bool;


        /**
         * @param Request $request
         * @return array|null
         */
        public function pipelineTowardCSV( Request $request ): ?array;

        /**
         * @return bool
         */
        public function hasImplementedCSV(): bool;
    }
?>