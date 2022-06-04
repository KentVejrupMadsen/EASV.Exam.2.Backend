<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
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
         * @param Request $request
         * @return JsonResponse|null
         */
        public final function pipeline( Request $request )
        {
            $result = null;

            switch( $request->header( 'Content-Type' ) )
            {
                case 'application/json':
                        $result = $this->pipelineTowardJSON( $request );
                    break;

                default:
                    break;
            }

            return $result;
        }
    }
?>