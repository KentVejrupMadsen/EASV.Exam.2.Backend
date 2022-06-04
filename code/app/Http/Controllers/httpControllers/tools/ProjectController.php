<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\tools;

    // External Libraries
    use App\Http\Requests\tools\ToolsProjectRequest;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use OpenApi\Attributes
        as OA;

    // Internal code
    use App\Http\Controllers\templates\ControllerPipeline;


    #[OA\Schema()]
    class ProjectController
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

        // Variables
        private static ?ProjectController $controller = null;


        /**
         * @return bool
         */
        public final function hasImplementedCSV(): bool
        {
            return true;
        }

        /**
         * @return bool
         */
        public final function hasImplementedJSON(): bool
        {
            return true;
        }

        /**
         * @return bool
         */
        public final function hasImplementedXML(): bool
        {
            return true;
        }

        /**
         * @param array $request
         * @return array|null
         */
        public final function pipelineTowardCSV( Array $request ): ?array
        {
            return null;
        }

        /**
         * @param array $request
         * @return JsonResponse|null
         */
        public final function pipelineTowardJSON( Array $request ): ?JsonResponse
        {
            return null;
        }

        /**
         * @param array $request
         * @return array|null
         */
        public final function pipelineTowardXML( Array $request ): ?array
        {
            return null;
        }

        
        /**
         * 
         */
        #[OA\Post( path: '/api/1.0.0/tools/project/create' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function public_create( ToolsProjectRequest $request )
        {
            
        }

        /**
         * @param Request $request
         * @return void
         */
        public final function create( Request $request )
        {

        }


        /**
         * 
         */
        #[OA\Get( path: '/api/1.0.0/tools/project/read' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function public_read( ToolsProjectRequest $request )
        {
            
        }

        /**
         * @param Request $request
         * @return void
         */
        public final function read( Request $request )
        {

        }


        /**
         * 
         */
        #[OA\Patch( path: '/api/1.0.0/tools/project/update' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function public_update( ToolsProjectRequest $request )
        {
            
        }

        /**
         * @param Request $request
         * @return void
         */
        public final function update( Request $request )
        {

        }


        /**
         * 
         */
        #[OA\Delete(path: '/api/1.0.0/tools/project/delete')]
        #[OA\Response(response: '200', description: 'The data')]
        #[OA\Response(response: '404', description: 'content not found')]
        public final function public_delete( ToolsProjectRequest $request )
        {
            
        }

        /**
         * @param Request $request
         * @return void
         */
        public final function delete( Request $request )
        {

        }

        /**
         * @param ProjectController $controller
         * @return void
         */
        public static final function setSingleton( ProjectController $controller ): void
        {
            self::$controller = $controller;
        }

        /**
         * @return ProjectController
         */
        public static final function getSingleton(): ProjectController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new ProjectController() );
            }

            return self::$controller;
        }
    }
?>