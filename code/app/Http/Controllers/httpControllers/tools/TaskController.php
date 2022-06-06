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
    use App\Http\Requests\tools\ToolsKanbanRequest;


    /**
     *
     */
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

        //
        private static ?TaskController $controller = null;

        //
        /**
         * @return bool
         */
        public final function hasImplementedCSV(): bool
        {
            return false;
        }

        /**
         * @return bool
         */
        public final function hasImplementedJSON(): bool
        {
            return false;
        }

        /**
         * @return bool
         */
        public final function hasImplementedXML(): bool
        {
            return false;
        }

        /**
         * @param array $request
         * @return array|null
         */
        public final function pipelineTowardCSV( Array $request ): ?array
        {
            if( !$this->hasImplementedCSV() )
            {
                // Not implemented
                abort(501);
            }

            return null;
        }

        /**
         * @param array $request
         * @return JsonResponse|null
         */
        public final function pipelineTowardJSON( Array $request ): ?JsonResponse
        {
            if( !$this->hasImplementedJSON() )
            {
                // Not implemented
                abort(501);
            }

            return null;
        }

        /**
         * @param array $request
         * @return array|null
         */
        public final function pipelineTowardXML( Array $request ): ?array
        {
            if( !$this->hasImplementedXML() )
            {
                // Not implemented
                abort(501);
            }

            return null;
        }

        /**
         * @param ToolsKanbanRequest $request
         * @return null
         */
        #[OA\Post( path: '/api/1.0.0/tools/task/create', tags: [ '1.0.0', 'tools' ] )]
        #[OA\Response( response: '200',
                       description: 'create a new task for a kanban board',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public final function public_create( ToolsKanbanRequest $request )
        {


            return $this->create( $request );
        }

        /**
         * @param Request $request
         * @return null
         */
        public final function create( Request $request )
        {


            return null;
        }


        /**
         * @param ToolsKanbanRequest $request
         * @return JsonResponse
         */
        #[OA\Get( path: '/api/1.0.0/tools/task/read', tags: [ '1.0.0', 'tools' ] )]
        #[OA\Response( response: '200',
                       description: 'read the content of a task',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public final function public_read( ToolsKanbanRequest $request )
        {


            return $this->read( $request );
        }

        /**
         * @param Request $request
         * @return JsonResponse
         */
        public final function read( Request $request )
        {


            return Response()->json(null, 200);
        }


        /**
         * @param ToolsKanbanRequest $request
         * @return null
         */
        #[OA\Patch( path: '/api/1.0.0/tools/task/update', tags: [ '1.0.0', 'tools' ] )]
        #[OA\Response( response: '200',
                       description: 'updates the information for a specific task',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public final function public_update( ToolsKanbanRequest $request )
        {


            return $this->update( $request );
        }

        /**
         * @param Request $request
         * @return null
         */
        public final function update( Request $request )
        {



            return null;
        }


        /**
         * @param ToolsKanbanRequest $request
         * @return JsonResponse
         */
        #[OA\Delete( path: '/api/1.0.0/tools/task/delete', tags: [ '1.0.0', 'tools' ] )]
        #[OA\Response( response: '200',
                       description: 'Delete a specific tasks.',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public final function public_delete( ToolsKanbanRequest $request )
        {
            return $this->delete( $request );
        }

        /**
         * @param Request $request
         * @return JsonResponse
         */
        public final function delete( Request $request )
        {

            return null;
        }

        // Accessor
        /**
         * @param TaskController $controller
         * @return void
         */
        public static final function setSingleton( TaskController $controller ): void
        {
            self::$controller = $controller;
        }

        /**
         * @return TaskController
         */
        public static final function getSingleton(): TaskController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new TaskController() );
            }

            return self::$controller;
        }
    }
?>