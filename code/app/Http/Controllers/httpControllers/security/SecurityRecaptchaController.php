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
    #[OA\Schema( title: 'Security Recaptcha Controller',
                 description: '',
                 type: self::model_type )]
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
         * @return null
         */
        #[OA\Get( path: '/api/1.0.0/securities/recaptcha/read', tags: [ '1.0.0', 'security' ] )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found')]
        public final function publicRead( SecurityCSRFRequest $Request )
        {
            return $this->read( $Request );
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
         * @param SecurityCSRFRequest $Request
         * @return null
         */
        #[OA\Patch( path: '/api/1.0.0/securities/recaptcha/update', tags: [ '1.0.0', 'security' ] )]
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
        public final function publicUpdate( SecurityCSRFRequest $Request )
        {
            return $this->update( $Request );
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
         * @param SecurityCSRFRequest $Request
         * @return null
         */
        #[OA\Post( path: '/api/1.0.0/securities/recaptcha/create', tags: [ '1.0.0', 'security' ] )]
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
        public final function publicCreate( SecurityCSRFRequest $Request )
        {
            return $this->create( $Request );
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
         * @param SecurityCSRFRequest $Request
         * @return null
         */
        #[OA\Delete( path: '/api/1.0.0/securities/recaptcha/delete', tags: [ '1.0.0', 'security' ] )]
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
        public final function publicDelete( SecurityCSRFRequest $Request )
        {
            return $this->delete( $Request );
        }

        /**
         * @param Request $request
         * @return null
         */
        public final function delete( Request $request )
        {

            return null;
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
