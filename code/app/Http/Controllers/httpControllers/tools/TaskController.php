<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\tools;

    // External
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;

    use OpenApi\Attributes
        as OA;

    // Internal
    use App\Http\Controllers\templates\ControllerPipeline;


    #[OA\Schema()]
    class TaskController
        extends ControllerPipeline
    {
        /**
         * @param bool $makeSingleton
         */
        public final function __construct( bool $makeSingleton = false )
        {
            parent::__construct();

            if( $makeSingleton )
            {
                self::setSingleton( $this );
            }
        }

        public final function hasImplementedCSV(): bool
        {
            // TODO: Implement hasImplementedCSV() method.
            return true;
        }

        public final function hasImplementedJSON(): bool
        {
            // TODO: Implement hasImplementedJSON() method.
            return true;
        }

        public final function hasImplementedXML(): bool
        {
            // TODO: Implement hasImplementedXML() method.
            return true;
        }

        public final function pipelineTowardCSV( Request $request ): ?array
        {
            // TODO: Implement pipelineTowardCSV() method.
            return null;
        }

        public final function pipelineTowardJSON( Request $request ): ?JsonResponse
        {
            // TODO: Implement pipelineTowardJSON() method.
            return null;
        }

        public final function pipelineTowardXML( Request $request ): ?array
        {
            // TODO: Implement pipelineTowardXML() method.
            return null;
        }

        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Post(path: '/api/1.0.0/tools/task/create' )]
        #[OA\Response( response: '200', description: 'create a new task for a kanban board' )]
        #[OA\Response(response: '404', description: 'content not found')]
        public final function public_create( Request $request ): JsonResponse
        {


            return Response()->json(null, 200);
        }

        public final function create( Request $request ): JsonResponse
        {


            return Response()->json(null, 200);
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Get(path:'/api/1.0.0/tools/task/read')]
        #[OA\Response( response: '200', description: 'read the content of a task' )]
        #[OA\Response(response: '404', description: 'content not found')]
        public final function public_read( Request $request ): JsonResponse
        {


            return Response()->json(null, 200);
        }

        public final function read( Request $request ): JsonResponse
        {


            return Response()->json(null, 200);
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Patch( path: '/api/1.0.0/tools/task/update' )]
        #[OA\Response( response: '200', description: 'updates the information for a specific task' )]
        #[OA\Response(response: '404', description: 'content not found')]
        public final function public_update( Request $request ): JsonResponse
        {


            return Response()->json(null, 200);
        }

        public final function update( Request $request ): JsonResponse
        {


            return Response()->json(null, 200);
        }



        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Delete( path: '/api/1.0.0/tools/task/delete' )]
        #[OA\Response( response: '200', description: 'Delete a specific tasks. ' )]
        #[OA\Response(response: '404', description: 'content not found')]
        public final function public_delete( Request $request ): JsonResponse
        {
            return Response()->json(null, 200);
        }

        public final function delete( Request $request ): JsonResponse
        {
            return Response()->json(null, 200);
        }

        private static $controller = null;

        public static final function setSingleton( TaskController $controller )
        {
            self::$controller = $controller;
        }

        public static final function getSingleton(): TaskController
        {
            if(is_null(self::$controller))
            {
                self::setSingleton(new TaskController());
            }

            return self::$controller;
        }
    }
?>