<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\account\entities;

    // External libraries
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;

    use OpenApi\Attributes
        as OA;

    // Internal Libraries
    use App\Http\Controllers\templates\ControllerPipeline;
    use App\Models\tables\AddressModel;


    /**
     * Account Email controller. That are used when getting "ask" by a computer for data.
     */
    #[OA\Schema()]
    class PersonAddressController
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

        //
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

        // Code
        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Get(path: '/api/1.0.0/accounts/entities/address/read')]
        #[OA\Response(response: '200', description: 'The data')]
        #[OA\Response(response: '404', description: 'content not found')]
        public function read( Request $request ): JsonResponse
        {

            return Response()->json(null, 200);
        }


        /**
         * @param Request $request
         * @return bool
         */
        #[OA\Delete(path: '/api/1.0.0/accounts/entities/address/delete')]
        #[OA\Response(response: '200', description: 'The data')]
        #[OA\Response(response: '404', description: 'content not found')]
        public function delete( Request $request ): bool
        {

            return false;
        }


        /**
         * 
         */
        #[OA\Post(path: '/api/1.0.0/accounts/entities/address/create')]
        #[OA\Response(response: '200', description: 'The data')]
        #[OA\Response(response: '404', description: 'content not found')]
        public final function create( Request $request ): JsonResponse
        {
            return Response()->json(null, 200);
        }



        /**
         * 
         */
        #[OA\Patch(path: '/api/1.0.0/accounts/entities/address/update')]
        #[OA\Response(response: '200', description: 'The data')]
        #[OA\Response(response: '404', description: 'content not found')]
        public final function update( Request $request ): JsonResponse
        {
            return Response()->json( null, 200 );
        }


        //
        private static $controller = null;

        public static function getSingleton(): PersonAddressController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new PersonAddressController() );
            }

            return self::$controller;
        }

        protected final static function setSingleton( PersonAddressController $controller )
        {
            self::$controller = $controller;
        }
    }
?>