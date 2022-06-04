<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\account;

    // External Libraries
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    use OpenApi\Attributes
        as OA;

    // Internal Libraries
    use App\Http\Controllers\templates\ControllerPipeline;
    use App\Http\Controllers\formatControllers\json\AccountResponseJSONFactory;
    use App\Http\Requests\account\AccountRequest;

    use App\Models\tables\User;


    #[OA\Schema()]
    class AccountController
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
        private static ?AccountController $controller = null;
        private static ?AccountResponseJSONFactory $responseFactory = null;


        // implement output
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
            return true;
        }


        /**
         * @param array $request
         * @return array|null
         */
        public final function pipelineTowardCSV( Array $request ): ?array
        {

            return null;
        }


        /**
         * @param array $request
         * @return JsonResponse|null
         */
        public final function pipelineTowardJSON( Array $request ): ?JsonResponse
        {


            return null;
        }


        /**
         * @param array $request
         * @return array|null
         */
        public final function pipelineTowardXML( Array $request ): ?array
        {

            return null;
        }


        /**
         * @param AccountRequest $request
         * @return JsonResponse
         */
        #[OA\Get( path: '/api/1.0.0/accounts/account/me' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function me( AccountRequest $request ): JsonResponse
        {
            $content_type = $request->header( 'Content-Type' );
            $response = [];

            $currentUser = Auth::user();

            return $this->Pipeline( $content_type, $response );
        }


        /**
         * @param AccountRequest $request
         * @return null
         */
        #[OA\Get( path: '/api/1.0.0/accounts/account/read' )]
        #[OA\Response( response: '200',
                       description: 'The data')]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function public_read( AccountRequest $request )
        {

            return $this->read( $request );
        }

        /**
         * @param Request $request
         * @return null
         */
        public final function read( Request $request )
        {
            $content_type = $request->header( 'Content-Type' );
            $response = [];

            return $this->Pipeline( $content_type, $response );
        }


        /**
         * @param Request $request
         * @return JsonResponse|null
         */
        #[OA\Post( path: 'api/1.0.0/accounts/account/login' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function login( Request $request )
        {
            $content_type = $request->header( 'Content-Type' );
            $response = [];

            return $this->Pipeline( $content_type, $response );
        }


        /**
         * @param AccountRequest $request
         * @return null
         */
        #[OA\Get( path: '/api/1.0.0/accounts/account/logout' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function logout( AccountRequest $request )
        {
            $content_type = $request->header( 'Content-Type' );
            $response = [];

            return $this->Pipeline( $content_type, $response );
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Post( path: '/api/1.0.0/accounts/account/create' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
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
            $content_type = $request->header( 'Content-Type' );
            $response = [];

            return $this->Pipeline( $content_type, $response );
        }


        /**
         * @param AccountRequest $request
         * @return JsonResponse
         */
        public final function public_update( AccountRequest $request )
        {
            return $this->update( $request );
        }

        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Patch( path: '/api/1.0.0/accounts/account/update' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function update( Request $request )
        {
            $content_type = $request->header( 'Content-Type' );
            $response = [];

            return $this->Pipeline( $content_type, $response );
        }


        /**
         * @param AccountRequest $request
         * @return JsonResponse|null
         */
        #[OA\Delete( path: '/api/1.0.0/accounts/account/delete' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function public_delete( AccountRequest $request )
        {

            return $this->delete( $request );
        }


        /**
         * @param Request $request
         * @return JsonResponse|null
         */
        public final function delete( Request $request )
        {
            $content_type = $request->header( 'Content-Type' );
            $response = [];

            return $this->Pipeline( $content_type, $response );
        }


        /**
         * @param AccountRequest $request
         * @return null
         */
        #[OA\Post( path: '/api/1.0.0/accounts/account/verify' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        #[OA\Response( response: '200',
                       description: 'The data')]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function verify( AccountRequest $request )
        {
            $content_type = $request->header( 'Content-Type' );
            $response = [];

            return $this->Pipeline( $content_type, $response );
        }


        /**
         * @return array
         */
        public final function exposeApiStructure(): array
        {
            return [];
        }

        
        // Accessors
            // Setters
        /**
         * @param AccountController $controller
         * @return void
         */
        public static final function setSingleton( AccountController $controller ): void
        {
            self::$controller = $controller;
        }

            // Getters
        /**
         * @return AccountController
         */
        public static final function getSingleton(): AccountController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new AccountController() );
            }

            return self::$controller;
        }

        /**
         * @return AccountResponseJSONFactory|null
         */
        public final static function getResponseFactory(): ?AccountResponseJSONFactory
        {
            if( is_null( self::$responseFactory ) )
            {
                self::setResponseFactory( AccountResponseJSONFactory::getSingleton() );
            }

            return self::$responseFactory;
        }

        /**
         * @param AccountResponseJSONFactory|null $responseFactory
         */
        public final static function setResponseFactory( ?AccountResponseJSONFactory $responseFactory ): void
        {
            self::$responseFactory = $responseFactory;
        }
    }
?>