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
         * 
         */
        #[OA\Post(path: '/api/1.0.0/tools/project/group/create')]
        #[OA\Response(response: '200', description: 'The ')]
        #[OA\Response(response: '404', description: 'content not found')]
        public final function public_create( Request $request )
        {
            
        }

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

        public final function delete( Request $request )
        {
            
        }

        private static $controller = null;

        public static final function setSingleton( ProjectMemberController $controller )
        {
            self::$controller = $controller;
        }

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