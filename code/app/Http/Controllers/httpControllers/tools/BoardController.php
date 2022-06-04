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
    class BoardController
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
        private static ?BoardController $controller = null;


        /**
         * @return bool
         */
        public final function hasImplementedCSV(): bool
        {
            // TODO: Implement hasImplementedCSV() method.
            return true;
        }

        /**
         * @return bool
         */
        public final function hasImplementedJSON(): bool
        {
            // TODO: Implement hasImplementedJSON() method.
            return true;
        }

        /**
         * @return bool
         */
        public final function hasImplementedXML(): bool
        {
            // TODO: Implement hasImplementedXML() method.
            return true;
        }

        /**
         * @param array $request
         * @return array|null
         */
        public final function pipelineTowardCSV( Array $request ): ?array
        {
            // TODO: Implement pipelineTowardCSV() method.
            return null;
        }

        /**
         * @param array $request
         * @return JsonResponse|null
         */
        public final function pipelineTowardJSON( Array $request ): ?JsonResponse
        {
            // TODO: Implement pipelineTowardJSON() method.
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
        #[OA\Get(path: '/api/1.0.0/tools/board/read')]
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
        #[OA\Post(path: '/api/1.0.0/tools/board/create')]
        #[OA\Response(response: '200', description: 'The data')]
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
        #[OA\Patch(path: '/api/1.0.0/tools/board/update')]
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
        #[OA\Delete(path: '/api/1.0.0/tools/board/delete')]
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

        // Accessors
        /**
         * @param BoardController $controller
         * @return void
         */
        public static final function setSingleton( BoardController $controller )
        {
            self::$controller = $controller;
        }

        /**
         * @return BoardController
         */
        public static final function getSingleton(): BoardController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new BoardController() );
            }

            return self::$controller;
        }
    }
?>