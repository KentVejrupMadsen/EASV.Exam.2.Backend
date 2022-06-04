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
        #[OA\Post(path: '/api/1.0.0/tools/project/create')]
        #[OA\Response(response: '200', description: 'The data')]
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
        #[OA\Get(path: '/api/1.0.0/tools/project/read')]
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
        #[OA\Patch(path: '/api/1.0.0/tools/project/update')]
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
        #[OA\Delete(path: '/api/1.0.0/tools/project/delete')]
        #[OA\Response(response: '200', description: 'The data')]
        #[OA\Response(response: '404', description: 'content not found')]
        public final function public_delete( Request $request )
        {
            
        }

        public final function delete( Request $request )
        {

        }


        private static $controller = null;

        /**
         * @param ProjectController $controller
         * @return void
         */
        public static final function setSingleton( ProjectController $controller )
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