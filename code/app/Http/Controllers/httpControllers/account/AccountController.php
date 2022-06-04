<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\account;

    // External Libraries
    use App\Http\Controllers\formatControllers\json\AccountResponseJSONFactory;
    use App\Http\Requests\security\SecurityProtectedRequest;
    use Carbon\Carbon;

    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Str;

    use OpenApi\Attributes
        as OA;

    // Internal Libraries
    use App\Http\Controllers\templates\ControllerPipeline;

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

        //
        private static $controller = null;
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
         * @param Request $request
         * @return array|null
         */
        public final function pipelineTowardCSV( Request $request ): ?array
        {

            return null;
        }


        /**
         * @param Request $request
         * @return array|null
         */
        public final function pipelineTowardJSON( Request $request ): ?JsonResponse
        {


            return null;
        }


        /**
         * @param Request $request
         * @return array|null
         */
        public final function pipelineTowardXML( Request $request ): ?array
        {

            return null;
        }


        /**
         * @param SecurityProtectedRequest $request
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
        public final function me(  $request ): JsonResponse
        {
            $currentUser = Auth::user();
            return response()->json($currentUser, 200);
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Get( path: '/api/1.0.0/accounts/account/read' )]
        #[OA\Response( response: '200',
                       description: 'The data')]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function public_read( Request $request ): JsonResponse
        {

            return Response()->json( null, 200 );
        }

        public final function read( Request $request ): JsonResponse
        {

            return Response()->json( null, 200 );
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Post( path: 'api/1.0.0/accounts/account/login' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function login( Request $request ): JsonResponse
        {

            return Response()->json(null, 200);
        }


        /** Renders the current bearer token invalid
         * @param SecurityProtectedRequest $request
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
        public final function logout( SecurityProtectedRequest $request )
        {

            return null;
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
        public final function public_create( Request $request ): JsonResponse
        {

            return response()->json(null, 200);
        }

        public final function create( Request $request ): JsonResponse
        {

            return response()->json(null, 200);
        }


        /**
         * @param SecurityProtectedRequest $request
         * @return JsonResponse
         */
        public final function public_update( SecurityProtectedRequest $request ): JsonResponse
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
        public final function update( Request $request ): JsonResponse
        {

            return Response()->json( null, 200 );
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */

        #[OA\Delete( path: '/api/1.0.0/accounts/account/delete' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function delete( Request $request ): JsonResponse
        {

            return Response()->json( null, 200 );
        }


        /**
         * @param SecurityProtectedRequest $request
         * @return JsonResponse
         */
        public final function public_delete( SecurityProtectedRequest $request ): JsonResponse
        {

            return $this->delete( $request );
        }


        /**
         * @param SecurityProtectedRequest $request
         * @return JsonResponse
         */
        #[OA\Post( path: '/api/1.0.0/accounts/account/verify' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        #[OA\Response( response: '200',
                       description: 'The data')]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function verify( SecurityProtectedRequest $request ): JsonResponse
        {

            return Response()->json( null, 200 );
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