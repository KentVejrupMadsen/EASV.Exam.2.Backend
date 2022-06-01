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
        // Variables
        private static ?SecurityCSRFTokenController $controller = null;

        private ?RedisCacheCSRFController $cache       = null;
        private ?CSRFResponseJSONFactory  $jsonFactory = null;


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



        // Functions that the routes interacts with
        /**
         * @param SecurityCSRFRequest $request
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function access( SecurityCSRFRequest $request )
        {
            return null;
        }


        //
        /**
         * @param SecurityCSRFRequest $Request
         * @return void
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public function publicRead( SecurityCSRFRequest $Request )
        {
            $this->read( $Request );
        }


        /**
         * @param Request $request
         * @return void
         */
        public function read( Request $request )
        {

        }


        /**
         * @param SecurityCSRFRequest $Request
         * @return JsonResponse
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public function publicCreate( SecurityCSRFRequest $Request )
        {
            return $this->create( $Request );
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        public final function create( Request $request )
        {

            return response()->json( $responseModel );
        }


        /**
         * @param SecurityCSRFRequest $Request
         * @return void
         */
        public function publicUpdate( SecurityCSRFRequest $Request )
        {
            $this->update( $Request );
        }


        /**
         * @param Request $request
         * @return void
         */
        public function update( Request $request )
        {

        }

        /**
         * @param SecurityCSRFRequest $request
         * @return JsonResponse
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function reset( SecurityCSRFRequest $request )
        {

            return response()->json( $foundFromDB );
        }




        //
        /**
         * @param SecurityCSRFRequest $Request
         * @return void
         */
        public function publicDelete( SecurityCSRFRequest $Request )
        {
            $this->delete( $Request );
        }


        /**
         * @param Request $request
         * @return void
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function delete( Request $request )
        {

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