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
    #[OA\Schema()]
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

        // Variables
        private static ?PersonEmailController $controller = null;

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


        // Code
        /**
         * Pipeline function:
         * @param Request $request
         * @return AccountEmailModel|null
         */
        #[OA\Get(path: '/api/1.0.0/accounts/entities/email/read')]
        #[OA\Response(response: '200', description: 'The data')]
        #[OA\Response(response: '404', description: 'content not found')]
        public function public_read( Request $request ): ?AccountEmailModel
        {
            abort( 300 );
        }


        public function read( Request $request ): ?AccountEmailModel
        {
            abort( 300 );
        }


        #[OA\Delete(path: '/api/1.0.0/accounts/entities/email/delete')]
        #[OA\Response(response: '200', description: 'The data')]
        #[OA\Response(response: '404', description: 'content not found')]
        public function public_delete( Request $request )
        {
            return $this->delete( $request );
        }

        public function delete( Request $request )
        {

            return false;
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Post(path: '/api/1.0.0/accounts/entities/email/create')]
        #[OA\Response(response: '200', description: 'The data')]
        #[OA\Response(response: '404', description: 'content not found')]
        public final function public_create( Request $request )
        {
            return $this->create( $request );
        }


        public final function create( Request $request )
        {

            return Response()->json(null, 200);
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Patch(path: '/api/1.0.0/accounts/entities/email/update')]
        #[OA\Response(response: '200', description: 'The data')]
        #[OA\Response(response: '404', description: 'content not found')]
        public final function public_update( Request $request ): JsonResponse
        {
            return Response()->json(null, 200);
        }

        public final function update( Request $request ): JsonResponse
        {
            return Response()->json(null, 200);
        }


        // Accessors
        /**
         * @return PersonEmailController
         */
        public static final function getSingleton(): PersonEmailController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new PersonEmailController() );
            }

            return self::$controller;
        }

        /**
         * @param PersonEmailController $controller
         * @return void
         */
        public static final function setSingleton( PersonEmailController $controller )
        {
            self::$controller = $controller;
        }
    }
?>