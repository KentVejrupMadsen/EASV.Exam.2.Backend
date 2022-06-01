<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\security;

    // External libraries
    use App\Http\Controllers\formatControllers\json\CSRFResponseJSONFactory;
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


    /**
     * 
     */
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
                $this->setCache( RedisCacheCSRFController::getSingleton() );
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

        private ?RedisCacheCSRFController $cache       = null;
        private ?CSRFResponseJSONFactory  $jsonFactory = null;



        // Functions that the routes interacts with
        /**
         * @param SecurityCSRFRequest $request
         * @return JsonResponse
         */
        #[OA\Post(path: '/api/1.0.0/securities/csrf/access')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function access( SecurityCSRFRequest $request ): JsonResponse
        {
            return Response()->json([], 200);
        }


        //
        /**
         * @param SecurityCSRFRequest $Request
         * @return JsonResponse
         */
        #[OA\Get( path: '/api/1.0.0/securities/csrf/read' )]
        #[OA\Response( response: '200', description: 'The data' )]
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
        #[OA\Get(path: '/api/1.0.0/securities/csrf/create')]
        #[OA\Response(response: '200', description: 'The data')]
        public function publicCreate( SecurityCSRFRequest $Request ): JsonResponse
        {
            return $this->create( $Request );
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        public final function create( Request $request ): JsonResponse
        {
            $array = [];

            return response()->json( $array, 200 );
        }


        /**
         * @param SecurityCSRFRequest $Request
         * @return JsonResponse
         */
        #[OA\Patch( path: '/api/1.0.0/securities/csrf/update' )]
        #[OA\Response( response: '200', description: 'The data' )]
        public function publicUpdate( SecurityCSRFRequest $Request ): JsonResponse
        {
            return $this->update( $Request );
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        public function update( Request $request ): JsonResponse
        {
            $array = [];

            return Response()->json( $array, 200 );
        }

        /**
         * @param SecurityCSRFRequest $request
         * @return JsonResponse
         */
        #[OA\Get(path: '/api/1.0.0/securities/csrf/reset')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function reset( SecurityCSRFRequest $request ): JsonResponse
        {
            return Response()->json([], 200);
        }




        //
        /**
         * @param SecurityCSRFRequest $Request
         * @return JsonResponse
         */
        #[OA\Delete(path: '/api/1.0.0/securities/csrf/delete' )]
        #[OA\Response(response: '200', description: 'The data')]
        public function publicDelete( SecurityCSRFRequest $Request ): JsonResponse
        {
            return Response()->json([], 200);
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
            // Controller singleton
        /**
         * @param SecurityCSRFTokenController $controller
         * @return void
         */
        public static final function setSingleton( SecurityCSRFTokenController $controller ): void
        {
            self::$controller = $controller;
        }

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


        // Redis cache
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
         * @param RedisCacheCSRFController $cacheController
         * @return void
         */
        protected final function setCache( RedisCacheCSRFController $cacheController ): void
        {
            $this->cache = $cacheController;
        }

        /**
         * @return bool
         */
        protected final function isCacheEmpty(): bool
        {
            return is_null( $this->cache );
        }

        // Formatter
            // Json
        protected final function setJsonFactory( CSRFResponseJSONFactory $factory ): void
        {
            $this->jsonFactory = $factory;
        }

        protected final function getJsonFactory(): CSRFResponseJSONFactory
        {
            return $this->jsonFactory;
        }

        protected final function isJsonFactoryEmpty(): bool
        {
            return is_null( $this->jsonFactory );
        }
    }
?>