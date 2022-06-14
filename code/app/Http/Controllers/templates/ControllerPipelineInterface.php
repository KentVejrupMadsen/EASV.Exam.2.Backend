<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    namespace App\Http\Controllers\templates;

    use Illuminate\Http\JsonResponse;


    /**
     *
     */
    interface ControllerPipelineInterface
    {
        /**
         * @param array $request
         * @return JsonResponse|null
         */
        public function pipelineTowardJSON( array $request ): ?JsonResponse;

        /**
         * @return bool
         */
        public function hasImplementedJSON(): bool;


        /**
         * @param array $request
         * @return array|null
         */
        public function pipelineTowardXML( array $request ): ?array;

        /**
         * @return bool
         */
        public function hasImplementedXML(): bool;


        /**
         * @param array $request
         * @return array|null
         */
        public function pipelineTowardCSV( array $request ): ?array;

        /**
         * @return bool
         */
        public function hasImplementedCSV(): bool;
    }
?>