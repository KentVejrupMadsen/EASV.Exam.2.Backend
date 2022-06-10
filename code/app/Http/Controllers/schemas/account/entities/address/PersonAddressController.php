<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    namespace App\Http\Controllers\schemas\account\entities\address;

    // External libraries
    use App\Http\Controllers\templates\ControllerPipeline;
    use App\Http\Requests\account\entities\PersonAddressRequest;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use OpenApi\Attributes as OA;

    // Internal Libraries


    /**
     * Account Email controller. That are used when getting "ask" by a computer for data.
     */
    #[OA\Schema( title: 'Person Address Controller',
                 description: '',
                 type: self::model_type)]
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

        // variables
        private static ?PersonAddressController $controller = null;


        //
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
                abort( 501 );
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
         * @param Request $request
         * @return JsonResponse
         */
        public final function read( Request $request ): JsonResponse
        {

            return Response()->json(null, 200);
        }


        #[OA\Get( path: '/api/1.0.0/accounts/entities/address/read',
                  tags: [ '1.0.0', 'account-additional' ] )]
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
        public final function public_read( PersonAddressRequest $request )
        {

            return $this->read( $request );
        }


        /**
         * @param PersonAddressRequest $request
         * @return false
         */
        #[OA\Delete( path: '/api/1.0.0/accounts/entities/address/delete',
                     tags: [ '1.0.0', 'account-additional' ] )]
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
        public function public_delete( PersonAddressRequest $request )
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
         * 
         */
        #[OA\Post( path: '/api/1.0.0/accounts/entities/address/create',
                   tags: [ '1.0.0', 'account-additional' ] )]
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
        public final function public_create( PersonAddressRequest $request )
        {
            return $this->create( $request );
        }

        /**
         * @param Request $request
         * @return JsonResponse|null
         */
        public final function create( Request $request ): ?JsonResponse
        {
            return null;
        }



        /**
         * 
         */
        #[OA\Patch( path: '/api/1.0.0/accounts/entities/address/update',
                    tags: [ '1.0.0', 'account-additional' ] )]
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
        public final function public_update( PersonAddressRequest $request ): JsonResponse
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
            // getters
        /**
         * @return PersonAddressController
         */
        public static function getSingleton(): PersonAddressController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new PersonAddressController() );
            }

            return self::$controller;
        }

            // setters
        /**
         * @param PersonAddressController $controller
         * @return void
         */
        protected final static function setSingleton( PersonAddressController $controller ): void
        {
            self::$controller = $controller;
        }
    }
?>