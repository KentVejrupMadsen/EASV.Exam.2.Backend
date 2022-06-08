<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\security;

    // External libraries
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;

    use OpenApi\Attributes
        as OA;


    // Internal libraries
    use App\Http\Controllers\cacheControllers\security\RedisCacheCSRFController;
    use App\Http\Controllers\templates\ControllerMessages;
    use App\Http\Controllers\templates\CrudController;

    use App\Http\Requests\security\SecurityCSRFRequest;

    use App\Models\security\CSRFModel;
    use App\Migrators\SecurityCSRFMigrator;

    use App\Http\Controllers\formatControllers\json\CSRFResponseJSONFactory;


    /**
     * 
     */
    #[OA\Schema( title: 'Security CSRF Token Controller',
                 description: '',
                 type: self::model_type )]
    class SecurityCSRFTokenController
        extends CrudController
    {
        /**
         * @param bool $makeSingleton
         */
        public function __construct( bool $makeSingleton = false )
        {
            if( $this->isCacheEmpty() )
            {
                $controller = new RedisCacheCSRFController( true );
                $this->setCache( $controller );
            }

            if( $this->isJsonFactoryEmpty() )
            {
                $this->setJsonFactory( CSRFResponseJSONFactory::getSingleton() );
            }

            if( $makeSingleton )
            {
                self::setSingleton( $this );
            }
        }

        // Variables
        private static ?SecurityCSRFTokenController $controller = null;

        private ?RedisCacheCSRFController $cache = null;
        private ?CSRFResponseJSONFactory $jsonFactory = null;
        private ?SecurityCSRFMigrator $constructor = null;


        // Functions that the routes interacts with
        /**
         * @param SecurityCSRFRequest $request
         * @return JsonResponse
         */
        #[OA\Post( path: '/api/1.0.0/securities/csrf/access', tags: [ '1.0.0', 'security' ] )]
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
        public final function access( SecurityCSRFRequest $request ): JsonResponse
        {
            return Response()->json([], 200);
        }


        //
        /**
         * @param SecurityCSRFRequest $Request
         * @return JsonResponse
         */
        #[OA\Get( path: '/api/1.0.0/securities/csrf/read', tags: [ '1.0.0', 'security' ] )]
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
        public function publicRead( SecurityCSRFRequest $Request ): JsonResponse
        {
            return $this->read( $Request );
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        public function read( Request $request ): JsonResponse
        {
            return Response()->json([], 200);
        }


        /**
         * @param SecurityCSRFRequest $Request
         * @return JsonResponse
         */
        #[OA\Get( path: '/api/1.0.0/securities/csrf/create', tags: [ '1.0.0', 'security' ] )]
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
        public function publicCreate( SecurityCSRFRequest $Request ): JsonResponse
        {
            $model = $this->create( $Request );

            // Caches the secret and public key
            $this->getCache()->create( $model, false );

            return $this->getJsonFactory()->CreateResponse( $model );
        }


        /**
         * @param Request $request
         * @return CSRFModel|null
         */
        public final function create( Request $request ): ?CSRFModel
        {
            return $this->getConstructor()->constructNewModel( $request->ip() );
        }


        /**
         * @param SecurityCSRFRequest $Request
         * @return JsonResponse
         */
        #[OA\Patch( path: '/api/1.0.0/securities/csrf/update', tags: [ '1.0.0', 'security' ] )]
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
        public final function publicUpdate( SecurityCSRFRequest $Request ): JsonResponse
        {
            return $this->update( $Request );
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        public final function update( Request $request ): JsonResponse
        {
            $array = [];

            return Response()->json( $array, 200 );
        }


        /**
         * @param SecurityCSRFRequest $request
         * @return JsonResponse
         */
        #[OA\Get( path: '/api/1.0.0/securities/csrf/reset', tags: [ '1.0.0', 'security' ] )]
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
        public final function reset( SecurityCSRFRequest $request ): JsonResponse
        {
            return Response()->json( [], 200 );
        }




        //
        /**
         * @param SecurityCSRFRequest $Request
         * @return JsonResponse
         */
        #[OA\Delete( path: '/api/1.0.0/securities/csrf/delete', tags: [ '1.0.0', 'security' ] )]
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
        public final function publicDelete( SecurityCSRFRequest $Request ): JsonResponse
        {
            return Response()->json( [], 200 );
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        public final function delete( Request $request ): JsonResponse
        {
            return Response()->json( [], 200 );
        }


        // Accessors
            // Getters
        /**
         * @return SecurityCSRFTokenController
         */
        public static final function getSingleton(): SecurityCSRFTokenController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new SecurityCSRFTokenController() );
            }

            return self::$controller;
        }


        /**
         * @return RedisCacheCSRFController
         */
        protected final function getCache(): RedisCacheCSRFController
        {
            if( $this->isCacheEmpty() )
            {
                $this->setCache( new RedisCacheCSRFController( true ) );
            }

            return $this->cache;
        }


        /**
         * @return CSRFResponseJSONFactory
         */
        protected final function getJsonFactory(): CSRFResponseJSONFactory
        {
            return $this->jsonFactory;
        }

        /**
         * @return SecurityCSRFMigrator
         */
        public final function getConstructor(): SecurityCSRFMigrator
        {
            if( is_null( $this->constructor ) )
            {
                $this->setConstructor( SecurityCSRFMigrator::getFactory() );
            }

            return $this->constructor;
        }


        // Setters
        /**
         * @param RedisCacheCSRFController $cacheController
         * @return void
         */
        protected final function setCache( RedisCacheCSRFController $cacheController ): void
        {
            $this->cache = $cacheController;
        }

        /**
         * @param CSRFResponseJSONFactory $factory
         * @return void
         */
        protected final function setJsonFactory( CSRFResponseJSONFactory $factory ): void
        {
            $this->jsonFactory = $factory;
        }

        /**
         * @param $constructor
         * @return void
         */
        protected final function setConstructor( $constructor ): void
        {
            $this->constructor = $constructor;
        }

        /**
         * @param SecurityCSRFTokenController $controller
         * @return void
         */
        public static final function setSingleton( SecurityCSRFTokenController $controller ): void
        {
            self::$controller = $controller;
        }

        /**
         * @return bool
         */
        protected final function isJsonFactoryEmpty(): bool
        {
            return is_null( $this->jsonFactory );
        }

        /**
         * @return bool
         */
        protected final function isCacheEmpty(): bool
        {
            return is_null( $this->cache );
        }


    }
?>