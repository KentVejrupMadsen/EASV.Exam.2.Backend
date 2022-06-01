<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\account\entities;

    // External Libraries
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use OpenApi\Attributes
        as OA;

    // Internal libraries
    use App\Http\Controllers\templates\ControllerPipeline;
    use App\Models\tables\AccountEmailModel;


    /**
     * Account Email controller. That are used when getting "ask" by a computer for data.
     */
    class PersonEmailController
        extends ControllerPipeline
    {
        /**
         * @param bool $makeSingleton
         */
        public function __construct( bool $makeSingleton = false )
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

        // Code
        /**
         * Pipeline function:
         * @param Request $request
         * @return AccountEmailModel|null
         */
        #[OA\Get(path: '/api/1.0.0/accounts/entities/email/read')]
        #[OA\Response(response: '200', description: 'The data')]
        public function read( Request $request ): ?AccountEmailModel
        {
            abort( 300 );
        }


        #[OA\Delete(path: '/api/1.0.0/accounts/entities/email/delete')]
        #[OA\Response(response: '200', description: 'The data')]
        public function delete( Request $request ): bool
        {

            return false;
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Post(path: '/api/1.0.0/accounts/entities/email/create')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function create( Request $request ): JsonResponse
        {

            return Response()->json(null, 200);
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Patch(path: '/api/1.0.0/accounts/entities/name/update')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function update( Request $request ): JsonResponse
        {
            return Response()->json(null, 200);
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Post( path: '/api/1.0.0/options/find/email' )]
        #[OA\Response( response: '200', description: 'retrieves an requested email object as a json response. if it exist else nothing' )]
        public final function find( Request $request ): JsonResponse
        {

            return Response()->json( null, 200 );
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Post( path: '/api/1.0.0/options/state/email' )]
        #[OA\Response( response: '200', description: 'validates if the requested email is existing in the database as a json response.' ) ]
        public final function exist( Request $request ): JsonResponse
        {


            return response()->json( null, 200);
        }

        //
        private static $controller = null;

        public static final function getSingleton(): PersonEmailController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new PersonEmailController() );
            }

            return self::$controller;
        }

        public static final function setSingleton( PersonEmailController $controller )
        {
            self::$controller = $controller;
        }
    }
?>