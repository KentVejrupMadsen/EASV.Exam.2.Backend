<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\tools;

    // External Libraries
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use OpenApi\Attributes
        as OA;

    // Internal libraries
    use App\Http\Controllers\templates\ControllerPipeline;


    #[OA\Schema()]
    class ProjectMemberController
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
        private static ?ProjectMemberController $controller = null;

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
            // TODO: Implement pipelineTowardXML() method.
            return null;
        }
        
        /**
         * 
         */
        #[OA\Post(path: '/api/1.0.0/tools/project/group/create')]
        #[OA\Response(response: '200', description: 'The ')]
        #[OA\Response(response: '404', description: 'content not found')]
        public final function public_create( Request $request )
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
        #[OA\Get(path: '/api/1.0.0/tools/project/group/read')]
        #[OA\Response(response: '200', description: 'The data')]
        #[OA\Response(response: '404', description: 'content not found')]
        public final function public_read( Request $request )
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
        #[OA\Patch(path: '/api/1.0.0/tools/project/group/update')]
        #[OA\Response(response: '200', description: 'The data')]
        #[OA\Response(response: '404', description: 'content not found')]
        public final function public_update( Request $request )
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
        #[OA\Delete(path: '/api/1.0.0/tools/project/group/delete')]
        #[OA\Response(response: '200', description: 'The data')]
        #[OA\Response(response: '404', description: 'content not found')]
        public final function public_delete( Request $request )
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
         * @param ProjectMemberController $controller
         * @return void
         */
        public static final function setSingleton( ProjectMemberController $controller )
        {
            self::$controller = $controller;
        }

        /**
         * @return ProjectMemberController
         */
        public static final function getSingleton(): ProjectMemberController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new ProjectMemberController() );
            }

            return self::$controller;
        }
    }
?>