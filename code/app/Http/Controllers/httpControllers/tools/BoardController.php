<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\tools;

    // External
    use Illuminate\Http\Request;

    use OpenApi\Attributes
        as OA;

    // Internal
    use App\Http\Controllers\templates\ControllerPipeline;


    final class BoardController
        extends ControllerPipeline
    {
        /**
         * 
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

        public final function pipelineTowardJSON( Request $request ): ?array
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
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function read( Request $request )
        {
            
        }


        /**
         * 
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function create( Request $request )
        {

        }


        /**
         * 
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function update( Request $request )
        {
            
        }


        /**
         * 
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function delete( Request $request )
        {
            
        }

        private static $controller = null;

        public static final function setSingleton( BoardController $controller )
        {
            self::$controller = $controller;
        }

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