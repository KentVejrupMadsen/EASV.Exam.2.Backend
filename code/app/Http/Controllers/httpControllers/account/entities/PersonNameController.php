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
    class PersonNameController
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
        private static ?PersonNameController $controller = null;

        // Code
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
            return true;
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
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Get( path: '/api/1.0.0/accounts/entities/name/read' )]
        #[OA\Response( response: '200',
                       description: 'reads a specific person name entity values from the database table' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function public_read( Request $request ): JsonResponse
        {
            return $this->read( $request );
        }

        /**
         * @param Request $request
         * @return JsonResponse
         */
        public final function read( Request $request ): JsonResponse
        {
            return Response()->json(null, 200);
        }


        #[OA\Delete( path: '/api/1.0.0/accounts/entities/name/delete' )]
        #[OA\Response( response: '200',
                       description: 'deletes a specific person name entity from the database table')]
        #[OA\Response( response: '404',
                       description: 'content not found')]
        public final function public_delete( Request $request ): JsonResponse
        {
            return $this->delete( $request );
        }

        /**
         * @param Request $request
         * @return JsonResponse
         */
        public final function delete( Request $request ): JsonResponse
        {
            return Response()->json(null, 200);
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Post( path: '/api/1.0.0/accounts/entities/name/create' )]
        #[OA\Response( response: '200',
                       description: 'creates a specific person name entity by inserting it into the database')]
        #[OA\Response( response: '404',
                       description: 'content not found')]
        public final function public_create( Request $request ): JsonResponse
        {
            return $this->create( $request );
        }

        /**
         * @param Request $request
         * @return JsonResponse
         */
        public final function create( Request $request ): JsonResponse
        {
            return Response()->json(null, 200);
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Patch( path: '/api/1.0.0/accounts/entities/name/update' )]
        #[OA\Response( response: '200', description: 'updates the person entities name with a new name' )]
        #[OA\Response(response: '404', description: 'content not found')]
        public final function public_update( Request $request ): JsonResponse
        {
            return $this->update( $request );
        }

        /**
         * @param Request $request
         * @return JsonResponse
         */
        public final function update( Request $request ): JsonResponse
        {
            return Response()->json(null, 200);
        }


        // accessors
        /**
         * @param PersonNameController $controller
         * @return void
         */
        public static final function setSingleton( PersonNameController $controller ): void
        {
            self::$controller = $controller;
        }

        /**
         * @return PersonNameController
         */
        public static final function getSingleton(): PersonNameController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new PersonNameController() );
            }

            return self::$controller;
        }
    }
?>