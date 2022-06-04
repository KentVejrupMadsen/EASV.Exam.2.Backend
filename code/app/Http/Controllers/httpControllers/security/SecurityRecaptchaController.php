<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\security;

    // External libraries
    use Illuminate\Http\Request;

    use OpenApi\Attributes
        as OA;

    // Internal libraries
    use App\Http\Controllers\templates\CrudController;
    use App\Http\Requests\security\SecurityCSRFRequest;


    /**
     *
     */
    #[OA\Schema()]
    class SecurityRecaptchaController
        extends CrudController
    {
        /**
         * @param bool $makeSingleton
         */
        public function __construct( bool $makeSingleton = false )
        {
            if( $makeSingleton )
            {
                self::setSingleton( $this );
            }
        }

        // Variables
        private static ?SecurityRecaptchaController $controller = null;


        //
        /**
         * @param SecurityCSRFRequest $Request
         * @return void
         */
        #[OA\Get( path: '/api/1.0.0/securities/recaptcha/read' )]
        #[OA\Response( response: '200',
                       description: 'The data')]
        #[OA\Response( response: '404',
                       description: 'content not found')]
        public final function publicRead( SecurityCSRFRequest $Request )
        {
            $this->read( $Request );
        }


        /**
         * @param SecurityCSRFRequest $Request
         * @return void
         */
        #[OA\Patch( path: '/api/1.0.0/securities/recaptcha/update' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function publicUpdate( SecurityCSRFRequest $Request )
        {
            $this->update( $Request );
        }


        /**
         * @param SecurityCSRFRequest $Request
         * @return void
         */
        #[OA\Post(path: '/api/1.0.0/securities/recaptcha/create' )]
        #[OA\Response(response: '200', description: 'The data')]
        #[OA\Response(response: '404', description: 'content not found')]
        public final function publicCreate( SecurityCSRFRequest $Request )
        {
            $this->create( $Request );
        }


        /**
         * @param SecurityCSRFRequest $Request
         * @return void
         */
        #[OA\Delete(path: '/api/1.0.0/securities/recaptcha/delete' )]
        #[OA\Response(response: '200', description: 'The data')]
        #[OA\Response(response: '404', description: 'content not found')]
        public final function publicDelete( SecurityCSRFRequest $Request )
        {
            $this->delete( $Request );
        }

        //
        /**
         * @param Request $request
         * @return void
         */
        public final function read( Request $request )
        {

        }


        /**
         * @param Request $request
         * @return void
         */
        public final function create( Request $request )
        {

        }


        /**
         * @param Request $request
         * @return void
         */
        public final function update( Request $request )
        {

        }


        /**
         * @param Request $request
         * @return void
         */
        public final function delete( Request $request )
        {

        }


        // Accessors
        /**
         * @param SecurityRecaptchaController $controller
         * @return void
         */
        public static final function setSingleton( SecurityRecaptchaController $controller ): void
        {
            self::$controller = $controller;
        }

        /**
         * @return SecurityRecaptchaController
         */
        public static final function getSingleton(): SecurityRecaptchaController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new SecurityRecaptchaController() );
            }

            return self::$controller;
        }
    }
?>
