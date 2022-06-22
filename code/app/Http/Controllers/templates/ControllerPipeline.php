<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Http\Controllers\templates;


    // External libraries
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;


    /**
     * Used to implement a pipeline flow. -> essentially defining which types
     * can be returned by the API.
     */
    abstract class ControllerPipeline
        extends CrudController
            implements ControllerPipelineInterface
    {
        /**
         *
         */
        public function __construct()
        {

        }


        /**
         * @param string $header
         * @param array $values
         * @return JsonResponse|null
         */
        public final function Pipeline( string $header, array $values )
        {
            $result = null;

            switch( $header )
            {
                case 'application/json':
                        $result = $this->pipelineTowardJSON( $values );
                    break;

                default:
                    break;
            }

            return $result;
        }
    }
?>
