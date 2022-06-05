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

    // internal Libraries
    use App\Http\Controllers\templates\ControllerPipeline;
    use App\Http\Requests\account\NewsletterRequest;
    use App\Models\tables\NewsletterSubscriptionModel;


    #[OA\Schema()]
    class NewsletterController
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
        private static ?NewsletterController $controller = null;


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
            return false;
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
        public final function pipelineTowardCSV( array $request ): ?array
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
        public final function pipelineTowardJSON( array $request ): ?JsonResponse
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
        public final function pipelineTowardXML( array $request ): ?array
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
        #[OA\Get( path: '/api/1.0.0/accounts/newsletter/read' )]
        #[OA\Response(response: '200', description: 'The data')]
        #[OA\Response(response: '404', description: 'content not found')]
        public final function public_read( Request $request ): JsonResponse
        {

            return Response()->json();
        }

        /**
         * @param Request $request
         * @return JsonResponse
         */
        public final function read( Request $request ): JsonResponse
        {

            return Response()->json();
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Post( path: '/api/1.0.0/accounts/newsletter/create')]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function public_create( Request $request )
        {

            return Response()->json(null, 200);
        }

        public final function create( Request $request )
        {

            return Response()->json(null, 200);
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Patch( path: '/api/1.0.0/accounts/newsletter/update' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function public_update( Request $request ): JsonResponse
        {

            return Response()->json(null, 200);
        }

        /**
         * @param Request $request
         * @return JsonResponse
         */
        public final function update( Request $request ): JsonResponse
        {

            return Response()->json(null, 200);
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Delete( path: '/api/1.0.0/accounts/newsletter/delete' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function public_delete( Request $request ): JsonResponse
        {

            return Response()->json(null, 200);
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
         * @param NewsletterController $controller
         * @return void
         */
        public static final function setSingleton( NewsletterController $controller )
        {
            self::$controller = $controller;
        }

        /**
         * @return NewsletterController
         */
        public static final function getSingleton(): NewsletterController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new NewsletterController() );
            }

            return self::$controller;
        }
    }
?>