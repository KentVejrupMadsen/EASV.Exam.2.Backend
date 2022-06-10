<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\schemas\account\entities\email;

    // External Libraries
    use App\Http\Controllers\templates\ControllerPipeline;
    use App\Models\tables\AccountEmailModel;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use OpenApi\Attributes as OA;

    // Internal libraries


    /**
     * Account Email controller. That are used when getting "ask" by a computer for data.
     */
    #[OA\Schema( title: 'Person Email Controller',
                 description: '',
                 type: self::model_type )]
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


        // functions
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


        // Code
        /**
         * Pipeline function:
         * @param Request $request
         * @return AccountEmailModel|null
         */
        #[OA\Get( path: '/api/1.0.0/accounts/entities/email/read', tags: [ '1.0.0', 'account-additional' ] )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public final function public_read( Request $request ): ?AccountEmailModel
        {
            return $this->read( $request );
        }


        /**
         * @param Request $request
         * @return AccountEmailModel|null
         */
        public final function read( Request $request ): ?AccountEmailModel
        {
            return null;
        }


        /**
         * @param Request $request
         * @return false
         */
        #[OA\Delete( path: '/api/1.0.0/accounts/entities/email/delete', tags: [ '1.0.0', 'account-additional' ] )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public final function public_delete( Request $request )
        {
            return $this->delete( $request );
        }

        /**
         * @param Request $request
         * @return false
         */
        public final function delete( Request $request )
        {

            return false;
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Post( path: '/api/1.0.0/accounts/entities/email/create', tags: [ '1.0.0', 'account-additional' ] )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public final function public_create( Request $request )
        {
            return $this->create( $request );
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        public final function create( Request $request )
        {

            return Response()->json(null, 200);
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Patch( path: '/api/1.0.0/accounts/entities/email/update', tags: [ '1.0.0', 'account-additional' ] )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
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
            return Response()->json( null, 200 );
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