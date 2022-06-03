<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\account;

    // External Libraries
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
        public final function pipelineTowardJSON( Request $request ): ?array
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
        public final function me(): JsonResponse
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
         * @param Request $request
         * @return void
         */
        #[OA\Get( path: '/api/1.0.0/accounts/account/logout' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function logout( Request $request )
        {

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
        public final function create( Request $request ): JsonResponse
        {

            return response()->json(null, 200);
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

            return Response()->json(null, 200);
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
         * @param Request $request
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
        public final function verify( Request $request ): JsonResponse
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

    }
?>