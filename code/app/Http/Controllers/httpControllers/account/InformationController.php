<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\account;

    // External libraries
    use Carbon\Carbon;

    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;

    use OpenApi\Attributes
        as OA;

    // Internal libraries
    use App\Http\Controllers\templates\ControllerPipeline;

    use App\Models\tables\AccountInformationModel;
    use App\Http\Requests\account\InformationRequest;


    #[OA\Schema()]
    class InformationController
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
        private static ?InformationController $controller = null;


        // implement output
        /**
         * @return bool
         */
        public final function hasImplementedCSV(): bool
        {
            // TODO: Implement hasImplementedCSV() method.
            return true;
        }

        /**
         * @return bool
         */
        public final function hasImplementedJSON(): bool
        {
            // TODO: Implement hasImplementedJSON() method.
            return true;
        }


        /**
         * @return bool
         */
        public final function hasImplementedXML(): bool
        {
            // TODO: Implement hasImplementedXML() method.
            return true;
        }


        /**
         * @param array $request
         * @return array|null
         */
        public final function pipelineTowardCSV( Array $request ): ?array
        {
            // TODO: Implement pipelineTowardCSV() method.
            return null;
        }


        /**
         * @param array $request
         * @return JsonResponse|null
         */
        public final function pipelineTowardJSON( Array $request ): ?JsonResponse
        {
            // TODO: Implement pipelineTowardJSON() method.
            return null;
        }


        /**
         * @param array $request
         * @return array|null
         */
        public final function pipelineTowardXML( Array $request ): ?array
        {
            // TODO: Implement pipelineTowardXML() method.
            return null;
        }

        /**
         * @param Request $request
         * @return null
         */
        #[OA\Get( path: '/api/1.0.0/accounts/information/read' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        public final function public_read( Request $request )
        {

            return null;
        }

        /**
         * @param Request $request
         * @return null
         */
        public final function read( Request $request )
        {

            return null;
        }


        /**
         * @param Request $request
         * @return null
         */
        #[OA\Post( path: '/api/1.0.0/accounts/information/create' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function public_create( Request $request )
        {
            return null;
        }

        /**
         * @param Request $request
         * @return null
         */
        public final function create( Request $request )
        {
            return null;
        }


        /**
         * @param Request $request
         * @return null
         */
        #[OA\Patch( path: '/api/1.0.0/accounts/information/update' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found')]
        public final function public_update( Request $request )
        {

            return null;
        }

        /**
         * @param Request $request
         * @return null
         */
        public final function update( Request $request )
        {

            return null;
        }


        /**
         * @param Request $request
         * @return void
         */
        #[OA\Delete( path: '/api/1.0.0/accounts/information/delete' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function public_delete( Request $request )
        {

            return null;
        }

        /**
         * @param Request $request
         * @return null
         */
        public final function delete( Request $request )
        {

            return null;
        }

        // Accessor
        /**
         * @param InformationController $controller
         * @return void
         */
        public static final function setSingleton( InformationController $controller ): void
        {
            self::$controller = $controller;
        }

        /**
         * @return InformationController
         */
        public static final function getSingleton(): InformationController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new InformationController() );
            }

            return self::$controller;
        }

    }
?>